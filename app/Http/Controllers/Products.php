<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\models\carmodelModel;
use App\models\carversionModel;
use Illuminate\Support\Facades\DB;

class Products extends Controller
{

    public function show($id)
    {
        $versions = array();
        $models   = array();
        $carparts = DB::table('car_parts')
            ->select('car_part_id', 'part', 'car_model_id', 'car_version_id', 'year', 'price', 'stock', 'car_parts.created_at', 'car_parts.updated_at')
            ->join('cars', 'car_parts.car_id', '=', 'cars.car_id')
            ->where('car_part_id', '=', $id)
            ->first();
       

        return view('products.index', compact('carparts', 'models', 'versions'));
    }
}
