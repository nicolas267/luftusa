<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\carmodelModel;

class Carmodel extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
    	$carmodels = carmodelModel::all();

    	return view('carmodels/index')->with('carmodels',  $carmodels);
    }

    public function create()
    {
    	return view('carmodels/create');
    }

    public function store()
    {
    	$data = Request()->all();

    	carmodelModel::create([

    			'car_model' => $data['carmodels']
    	]);

    	return redirect('carmodels/');
    }

    public function edit(carmodelModel $data)
    {
    	return view('carmodels/edit', compact('data'));
    }

    public function upgrade()
    {
    	$data = Request()->all();

    	carmodelModel::where('car_model_id', $data['carmodelid'])
    				->update(['car_model' => $data['carmodel']
							]);   
		return redirect('/carmodels'); 
    }

    public function destroy($carmodelid)
    {
    	carmodelModel::where('car_model_id', $carmodelid)->delete();

    	return redirect('carmodels/');
    }
}
