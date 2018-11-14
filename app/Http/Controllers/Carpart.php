<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\carpartModel;
use Illuminate\Support\Facades\DB;

class Carpart extends Controller
{
    public function index()
    {
    	$carparts = DB::table('car_parts')
            ->select('car_model_id', 'car_version_id', 'car_year_id', 'part', 'price', 'stock', 'car_parts.created_at', 'car_parts.updated_at')
            ->join('cars','car_parts.car_id','=','cars.car_id')
            ->join('parts','car_parts.part_id','=','parts.part_id')
            ->get();
            dd($carparts);
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

    			'car_id' => $data['Carparts'],
                'part_id' => $data['Carparts'],
                'price' => $data['Carparts'],
                'stock' => $data['Carparts']
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
