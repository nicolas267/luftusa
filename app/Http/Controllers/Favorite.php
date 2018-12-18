<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\models\favoriteModel;

class Favorite extends Controller
{

    public function index()
    {
        $favorites = DB::table('favorites')
        ->join('car_parts','favorites.car_part_id','=','car_parts.car_part_id')
        ->where('favorites.user_id','=',auth()->user()->user_id)
        ->paginate(16);
        return view('favorites.index',compact('favorites'));
    }
    public function favorite($data)
    {
        $favorite = DB::table('favorites')
            ->where('car_part_id', $data)
            ->where('user_id', auth()->user()->user_id)
            ->first();

        if (!$favorite) {
            favoriteModel::create([

    			'car_part_id' => $data,
    			'user_id' => auth()->user()->user_id
    	]);

        return back();

        } else {
            favoriteModel::where('favorite_id', $favorite->favorite_id)->delete();

            return back();
        }
    }
}
