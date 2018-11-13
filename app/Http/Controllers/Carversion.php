<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\carversionModel;

class Carversion extends Controller
{
    public function index()
    {
    	$carversions = carversionModel::all();

    	return view('carversions/index')->with('carversions',  $carversions);
    }

    public function create()
    {
    	return view('carversions/create');
    }

    public function store()
    {
    	$data = Request()->all();

    	carversionModel::create([

    			'car_version' => $data['Carversions']
    	]);

    	return redirect('carversions/');
    }

    public function edit(CarversionModel $data)
    {
    	return view('carversions/edit', compact('data'));
    }

    public function upgrade()
    {
    	$data = Request()->all();

    	CarversionModel::where('car_versions_id', $data['Carversionid'])
    				->update(['car_version' => $data['Carversion']
							]);   
		return redirect('/carversions'); 
    }

    public function destroy($carversionid)
    {
    	CarversionModel::where('car_versions_id', $carversionid)->delete();

    	return redirect('carversions/');
    }
}
