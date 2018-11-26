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
    function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $cars = DB::table('cars')
            ->select('car_id', 'car_model', 'car_version', 'year', 'cars.created_at', 'cars.updated_at')
            ->join('car_models', 'cars.car_model_id', '=', 'car_models.car_model_id')
            ->join('car_versions', 'cars.car_version_id', '=', 'car_versions.car_version_id')
            ->get();

        return view('cars/index')->with('cars', $cars);
    }

    public function create()
    {
        $carmodels   = carmodelModel::all();
        $carversions = carversionModel::all();
        $year = date("y")+2000;

        return view('cars/create', compact('carmodels', 'carversions', 'year'));
    }

    public function store()
    {
        $data = Request()->all();

        carModel::create([

            'car_model_id'   => $data['carmodel'],
            'car_version_id' => $data['carversion'],
            'year'           => $data['year']
        ]);

        return redirect('cars/');
    }

    public function edit($id)
    {

        $datas = DB::table('cars')
            ->where('car_id', $id)
            ->select('car_id', 'car_model', 'car_version', 'year', 'cars.car_model_id', 'cars.car_version_id')
            ->join('car_models', 'cars.car_model_id', '=', 'car_models.car_model_id')
            ->join('car_versions', 'cars.car_version_id', '=', 'car_versions.car_version_id')
            ->get();

        $carmodels   = carmodelModel::all();
        $carversions = carversionModel::all();
        $year = date("y")+2000;

        return view('cars/edit', compact('datas', 'carmodels', 'carversions', 'year'));
    }

    public function upgrade()
    {
        $data = Request()->all();

        carModel::where('car_id', $data['carid'])
            ->update([

                'car_model_id'   => $data['carmodel'],
                'car_version_id' => $data['carversion'],
                'year'           => $data['year']

            ]);
        return redirect('/cars');
    }

    public function destroy($carid)
    {
        carModel::where('car_id', $carid)->delete();

        return redirect('cars/');
    }
}
