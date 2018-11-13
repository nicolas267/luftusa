<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\blogModel;

class Blog extends Controller
{
    public function index()
    {
    	$blogs = blogModel::all();
    	return view('blogs/index')->with('blogs',  $blogs);
    }

    public function create()
    {
    	return view('blogs/create');
    }

    public function store()
    {
    	$data = Request()->all();

    	cartypeModel::create([

    			'car_type' => $data['CarType']
    	]);

    	return redirect('blogs/');
    }

    public function edit(cartypeModel $data)
    {
    	return view('blogs/edit', compact('data'));
    }

    public function upgrade()
    {
    	$data = Request()->all();

       	cartypeModel::where('car_type_id', $data['CarTypeid'])
    				->update(['car_type' => $data['CarType']
							]);   
		return redirect('/Blog'); 
    }

    public function destroy($cartypeid)
    {
    	cartypeModel::where('car_type_id', $cartypeid)->delete();

    	return redirect('blog/');

    }
}
