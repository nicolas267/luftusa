<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use Payer;

class Payment extends Controller
{

    public function __construct(){
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

    public function payWithPaypal(Request $request){
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $item_list = new ItemList();
        foreach ($cart as $key => $artitcle) {
            $item = new Item();
            $item->setName($artitcle->name) /** Item Name */
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($artitcle->name); /** Unit Price */

            $item_list->setItems(array($item));
        }

        $amount = new Amount();
        $amount->setCurrency('USD')->setTotal($request->amount);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
        ->setItemList($item_list)
        ->setDescription('Description payment');
        
        $redirect_urls = new RedirecUrls();
        $redirect_urls->setReturnURL(URL::route('status'))->setCancelUrl(URL::route('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
        ->setPayer($payer)
        ->setRedirectUrls($redirect_urls)
        ->setTransactions(array($transaction));

        try {
            $payment->create($this->_api_context);
        } catch(\PayPal\Exception\PPConnectionException $ex){
            if(\Config::get('app.debug')){
                \Session::put('error', 'Connection timeout');
                return Redirect::route('shipping');
            }
            else{
                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Rect::route('shipping');
            }
        }

        foreach($payment->getLinks() as $link){
            if($link->getRel() == 'approval_url'){
                $redirect_url = $link->getHref();
                break;
            }
        }

        /** Add payment ID to session */
        Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)){
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
        $payment_id = Session::get('paypal_payment_id');

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
                \Session::put('error', 'El Pago no se realizó');
                return Redirect::to('/payini');
                }
        
        $payment = Payment::get($payment_id, $this->_api_context);
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

    public function saveRegist(){
        return true;
    }
}
