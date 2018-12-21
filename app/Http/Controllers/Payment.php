<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment as Pay;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use App\models\ordersModel;
use App\models\orders_productsModel;
use Auth;

class Payment extends Controller
{

    public function __construct()
    {
        /*  Paypal Api Config  */
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(
            new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret']
            )
        );
        $this->_api_context->setConfig($paypal_conf['settings']);

    }

    public function payWithPaypal(Request $request)
    {

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $item_list = new ItemList();
        $cart = Cart::getContent();
        $total = 0;
        $items = array();
        foreach ($cart as $key => $article) {
            $item = new Item();
            $item->setName($article->name)
                ->setCurrency('USD')
                ->setQuantity(1)
                ->setPrice($article->price);

            array_push($items, $item);
            $total = $total + $article->price;
        }

        $item_list->setItems($items);

        /*  $item = new Item();
        $item->setName('Ground Coffee 40 oz')
        ->setCurrency('USD')
        ->setQuantity(1)
        ->setSku("123123") // Similar to `item_number` in Classic API
        ->setPrice(); */

        $details = new Details();
        $details->setShipping(0)
            ->setTax(0)
            ->setSubtotal($total);

        $amount = new Amount();
        $amount->setCurrency('USD')->setTotal($total)->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Description payment')
            ->setInvoiceNumber(uniqid());

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('status'))->setCancelUrl(\URL::route('status'));

        $payment = new Pay();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            die($ex);
            if (\Config::get('app.debug')) {
                \Session::put('error', 'Connection timeout');
                return Redirect::route('shipping');
            } else {
                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::route('shipping');
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        /** Add payment ID to session */
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {
            /** Redirect to paypal */
            return Redirect::away($redirect_url);
        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::route('shipping');
    }

    public function index()
    {
        return view('shipping.index');
    }

    public function getPaymentStatus()
    {
        /** Get the payment ID before session clear **/
        $payment_id = Input::get('paymentId');

        /** clear the session payment ID **/
        //Session::forget('paypal_payment_id');

        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            \Session::put('error', 'El Pago no se realizó');
            return Redirect::to('/shipping2');
        }

        $payment = Pay::get($payment_id, $this->_api_context);

        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {

            $this->saveRegist();

            \Session::put('success', 'Se realizó el pago exitósamente.');
            return Redirect::to('/');
        }
        \Session::put('error', 'El pago no se realizó.');
        return Redirect::route('shipping');
    }

    public function saveRegist()
    {
        $cart = Cart::getContent();

        $total = 0;

        
        foreach ($cart as $key => $article) {
            //array_push($items, $item);
            $total = $total + $article->price;
        }

        $order = new ordersModel();
        $order->user_id = Auth::user()->user_id;
        $order->subtotal = $total;
        $order->tax = 0;
        $order->total = $total;
        $order->status = true;
        $order->save();

        $order_id = $order->id;

        foreach ($cart as $key => $article) {
            
           $order_product = new orders_productsModel();
           $order_product->order_id = $order_id;
           $order_product->car_part_id = $article->id;
           $order_product->quantity = $article->quantity;
           $order_product->subtotal = $article->price * $article->quantity;
           $order_product->save();
        }

        $cart->destroy();

    }
}
