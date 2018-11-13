<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\partModel;

class Part extends Controller
{
    public function index()
    {
    	$parts = partModel::all();

    	return view('parts/index')->with('parts',  $parts);
    }

    public function create()
    {
    	return view('parts/create');
    }

    public function store()
    {
    	$data = Request()->all();
    	partModel::create([

    			'part' => $data['part']
    	]);

    	return redirect('parts/');
    }

    public function edit(partModel $data)
    {
    	return view('parts/edit', compact('data'));
    }

    public function upgrade()
    {
    	$data = Request()->all();

    	partModel::where('part_id', $data['partid'])
    				->update(['part' => $data['part']
							]);   
		return redirect('/parts'); 
    }

    public function destroy($partid)
    {
    	partModel::where('part_id', $partid)->delete();

    	return redirect('parts/');
    }
}
