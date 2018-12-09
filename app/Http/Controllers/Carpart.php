<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\carpartModel;
use App\models\carModel;
use App\models\carmodelModel;
use App\models\carversionModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection as Collection;

class Carpart extends Controller
{
   
    public function index()
    {
        $versions = array();
        $models = array();
    	$carparts = DB::table('car_parts')
            ->select('car_part_id', 'part', 'car_model_id', 'car_version_id', 'year', 'price', 'stock', 'car_parts.created_at', 'car_parts.updated_at')
            ->join('cars','car_parts.car_id','=','cars.car_id')
            ->get();
            foreach ($carparts as $carpart) {

                array_push($versions, CarversionModel::where('car_version_id', $carpart->car_version_id)
                                                    ->select('car_version')
                                                    ->get());

                array_push($models, carmodelModel::where('car_model_id', $carpart->car_model_id)
                                                    ->select('car_model')
                                                    ->get());
            }

    	return view('carparts/index', compact('carparts', 'models', 'versions'));
    }

    public function create()
    {
        $cars = carModel::all();
    	return view('carparts/create', compact('cars'));
    }

    public function store()
    {
    	$data = Request()->all();

    	carpartModel::create([

    			'car_id' => $data['cars'],
                'part' => $data['part'],
                'price' => $data['price'],
                'stock' => $data['stock']
    	]);

    	return redirect('carparts/');
    }

    public function edit(carpartModel $datas)
    {
        $cars = carModel::all();
    	return view('carparts/edit', compact('datas', 'cars'));
    }

    public function upgrade()
    {
    	$data = Request()->all();

    	carpartModel::where('car_part_id', $data['carpartid'])
    				->update([

                        'car_id' => $data['cars'],
                        'part' => $data['part'],
                        'price' => $data['price'],
                        'stock' => $data['stock']

							]);   
		return redirect('/carparts'); 
    }

    public function destroy($carpartid)
    {
    	carpartModel::where('car_part_id', $carpartid)->delete();

    	return redirect('carparts/');
    }
}
