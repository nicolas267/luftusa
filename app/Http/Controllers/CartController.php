<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Cart;
use Illuminate\Http\Request;
use App\models\cartypeModel;
use App\models\carmodelModel;
use App\models\carversionModel;
use App\models\ordersModel;
use App\models\orders_productsModel;
use DB;

class CartController extends Controller
{
    public function index()
    {
        $orders = DB::table('car_parts')
        ->join('orders_products', 'car_parts.car_part_id', '=', 'orders_products.car_part_id')
        ->join('orders', 'orders.order_id', '=', 'orders_products.order_id')
        ->selectRaw('count(orders_products.car_part_id) as user_count,orders_products.car_part_id,part,price,orders_products.quantity,orders_products.subtotal,orders_products.order_product_id ')
        ->orderBy('order_product_id','desc')
        ->groupBy('orders_products.car_part_id')
        ->groupBy('car_parts.car_part_id')
        ->get();

        $data = Cart::getContent();
        return view('cart/index', compact('data','orders'));
    }

    public function store(Request $request)
    {
        $add = Cart::add([
            'id'       => $request->id,
            'name'     => $request->name,
            'price'    => $request->price,
            'quantity' => $request->qty,
        ]);

        if ($add) {
            return redirect('cart');
        }
    }

    public function update(Request $request, $id)
    {
        $update = Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value'    => $request->qty,
            ),
        ));

        if ($update) {
            return redirect('cart');
        }
    }

    public function destroy($id)
    {
        $delete = Cart::remove($id);
        if ($delete) {
            return redirect('cart');
        }
    }
}
