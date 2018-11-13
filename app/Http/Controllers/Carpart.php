<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\carpartModel;

class Carpart extends Controller
{
    public function index()
    {
    	$carparts = carpartModel::all();

    	return view('carparts/index')->with('carparts',  $carparts);
    }

    public function create()
    {
    	return view('carparts/create');
    }

    public function store()
    {
    	$data = Request()->all();

    	carpartModel::create([

    			'car_part' => $data['Carparts']
    	]);

    	return redirect('carparts/');
    }

    public function edit(carpartModel $data)
    {
    	return view('carparts/edit', compact('data'));
    }

    public function upgrade()
    {
    	$data = Request()->all();

    	carpartModel::where('car_part_id', $data['Carpartid'])
    				->update(['car_part' => $data['Carpart']
							]);   
		return redirect('/carparts'); 
    }

    public function destroy($carpartid)
    {
    	carpartModel::where('car_part_id', $carpartid)->delete();

    	return redirect('carsparts/');
    }
}
