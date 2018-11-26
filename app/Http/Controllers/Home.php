<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\cartypeModel;
use App\models\carmodelModel;
use App\models\carversionModel;
use App\models\ordersModel;
use App\models\Orders_products;
use App\Http\Controllers\Controller;
use DB;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('car_parts')
            ->join('orders_products', 'car_parts.car_part_id', '=', 'orders_products.car_part_id')
            ->join('orders', 'orders.order_id', '=', 'orders_products.order_id')
            ->selectRaw('count(orders_products.car_part_id) as user_count,orders_products.car_part_id,part,price')
            ->orderBy('user_count','desc')
            ->groupBy('orders_products.car_part_id')
            ->groupBy('car_parts.car_part_id')
            ->limit(8)
            ->get();

        $carstype    = cartypeModel::all();
        $carmodel    = carmodelModel::all();
        $carversions = carversionModel::all();
        return view('home/index',compact('carstype','carmodel','carversions','products'));
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
        //
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
        //
    }
}
