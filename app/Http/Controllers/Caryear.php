<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\caryearModel;

class Caryear extends Controller
{

    public function index()
    {
    	$caryears = caryearModel::all();

    	return view('caryears/index')->with('caryears',  $caryears);
    }

    public function create()
    {
    	return view('caryears/create');
    }

    public function store()
    {
    	$data = Request()->all();

    	caryearModel::create([

    			'start_years' => $data['datestart'],
    			'end_years' => $data['dateend']
    	]);

    	return redirect('caryears/');
    }

    public function edit(caryearModel $data)
    {
    	return view('caryears/edit', compact('data'));
    }

    public function upgrade()
    {
    	$data = Request()->all();
    	caryearModel::where('car_years_id', $data['car_years_id'])
    				->update([
    						'start_years' => $data['datestart'],
    						'end_years' => $data['dateend']
					]);   
		return redirect('/caryears'); 
    }

    public function destroy($caryearid)
    {
    	caryearModel::where('car_years_id', $caryearid)->delete();

    	return redirect('caryears/');
    }
}
