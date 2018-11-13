<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\carmodelModel;

class Carmodel extends Controller
{
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

    			'car_model' => $data['CarModels']
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

    	carmodelModel::where('car_model_id', $data['CarModelid'])
    				->update(['car_model' => $data['CarModel']
							]);   
		return redirect('/carmodels'); 
    }

    public function destroy($carmodelid)
    {
    	carmodelModel::where('car_model_id', $carmodelid)->delete();

    	return redirect('carsmodels/');
    }
}
