<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\cartypeModel;
use App\models\carmodelModel;
use App\models\carversionModel;
use App\models\ordersModel;
use App\models\orders_productsModel;
use DB;
use Session;
class Orders extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $orders = DB::table('car_parts')
        ->join('orders_products', 'car_parts.car_part_id', '=', 'orders_products.car_part_id')
        ->join('orders', 'orders.order_id', '=', 'orders_products.order_id')
        ->selectRaw('count(orders_products.car_part_id) as user_count,orders_products.car_part_id,part,price,orders_products.quantity,orders_products.subtotal,orders_products.order_product_id ')
        ->orderBy('order_product_id','desc')
        ->groupBy('orders_products.car_part_id')
        ->groupBy('car_parts.car_part_id')
        ->paginate(5);
        $carstype    = cartypeModel::all();
        $carmodel    = carmodelModel::all();
        $carversions = carversionModel::all(); 
        return view('orders/index',compact('carstype','carmodel','carversions','orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        orders_productsModel::where('order_product_id', $id)->delete();
        return redirect('orders/');
    }
}
