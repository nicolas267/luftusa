<?php

namespace App\Http\Controllers;

use App\models\carModel;
use App\models\carmodelModel;
use App\models\carversionModel;
use App\models\caryearModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Car extends Controller
{
    public function index()
    {
    	$cars = DB::table('cars')
            ->select('car_id', 'car_model', 'car_version', 'start_years', 'end_years', 'cars.created_at', 'cars.updated_at')
            ->join('car_models','cars.car_model_id','=','car_models.car_model_id')
            ->join('car_versions','cars.car_version_id','=','car_versions.car_versions_id')
            ->join('car_years','cars.car_year_id','=','car_years.car_years_id')
            ->get();

    	return view('cars/index')->with('cars',  $cars);
    }

    public function create()
    {
        $carmodels = carmodelModel::all();
        $carversions = carversionModel::all();
        $caryears = caryearModel::all();

    	return view('cars/create', compact('carmodels', 'carversions', 'caryears'));
    }

    public function store()
    {
    	$data = Request()->all();

    	carModel::create([

    			'car_model_id' => $data['carmodel'],
    			'car_version_id' => $data['carversion'],
    			'car_year_id' => $data['caryears']
    	]);

    	return redirect('cars/');
    }

    public function edit($id)
    {

    	$datas = DB::table('cars')
            ->where('car_id', $id)
            ->select('car_id', 'car_model', 'car_version', 'cars.car_model_id', 'cars.car_version_id','start_years', 'end_years', 'cars.car_year_id' ,'cars.created_at', 'cars.updated_at')
            ->join('car_models','cars.car_model_id','=','car_models.car_model_id')
            ->join('car_versions','cars.car_version_id','=','car_versions.car_versions_id')
            ->join('car_years','cars.car_year_id','=','car_years.car_years_id')
            ->get();

        $carmodels = carmodelModel::all();
        $carversions = carversionModel::all();
        $caryears = caryearModel::all();

    	return view('cars/edit', compact('datas', 'carmodels', 'carversions', 'caryears'));
    }

    public function upgrade()
    {
    	$data = Request()->all();

    	carModel::where('car_id', $data['carid'])
    				->update([

    					'car_model_id' => $data['carmodel'],
    					'car_version_id' => $data['carversion'],
    					'car_year_id' => $data['caryears']

					]);   
		return redirect('/cars'); 
    }

    public function destroy($carid)
    {
    	carModel::where('car_id', $carid)->delete();

    	return redirect('cars/');
    }
}
