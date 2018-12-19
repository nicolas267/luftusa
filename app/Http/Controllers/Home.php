<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\cartypeModel;
use App\models\carmodelModel;
use App\models\carversionModel;
use App\models\ordersModel;
use App\models\Orders_productsModel;
use App\Http\Controllers\Controller;
use DB;
use Auth;

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

        if(Auth::guest()){
            $favorite = [];
        }
        else{



        $favorite = DB::table('favorites')
        ->join('car_parts','favorites.car_part_id','=','car_parts.car_part_id')
        ->selectRaw('count(favorites.favorite_id) as favorite,car_parts.car_part_id,car_parts.price,car_parts.part')
        ->orderBy('favorite','desc')
        ->groupBy('favorite_id')
        ->where('favorites.user_id','=',auth()->user()->user_id)
        ->get();

        }

        $carstype    = cartypeModel::all();
        $carmodel    = carmodelModel::all();
        $carversions = carversionModel::all();
        return view('home/index',compact('carstype','carmodel','carversions','products','favorite'));
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
