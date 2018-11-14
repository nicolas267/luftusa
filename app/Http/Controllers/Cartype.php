<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\cartypeModel;

class Cartype extends Controller
{
    public function index()
    {
    	$carstype = cartypeModel::all();
    	return view('carstype/index')->with('carstype',  $carstype);
    }

    public function create()
    {
    	return view('carstype/create');
    }

    public function store()
    {
    	$data = Request()->all();

    	cartypeModel::create([

    			'car_type' => $data['cartype']
    	]);

    	return redirect('carstype/');
    }

    public function edit(cartypeModel $data)
    {
    	return view('carstype/edit', compact('data'));
    }

    public function upgrade()
    {
    	$data = Request()->all();

       	cartypeModel::where('car_type_id', $data['cartypeid'])
    				->update([

                        'car_type' => $data['cartype']
					
                    ]);   
		return redirect('/carstype'); 
    }

    public function destroy($cartypeid)
    {
    	cartypeModel::where('car_type_id', $cartypeid)->delete();

    	return redirect('carstype/');

    }
}
