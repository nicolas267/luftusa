<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\usertypeModel;

class usertype extends Controller
{
    public function index()
    {
    	$userstype = usertypeModel::all();
    	return view('userstype/index')->with('userstype',  $userstype);
    }

    public function create()
    {
    	return view('userstype/create');
    }

    public function store()
    {
    	$data = Request()->all();

    	usertypeModel::create([

    			'users_type' => $data['usertype']
    	]);

    	return redirect('userstype/');
    }

    public function edit(usertypeModel $data)
    {
    	return view('userstype/edit', compact('data'));
    }

    public function upgrade()
    {
    	$data = Request()->all();

       	usertypeModel::where('users_type_id', $data['usertypeid'])
    				->update(['users_type' => $data['userstype']
							]);   
		return redirect('/userstype'); 
    }

    public function destroy($usertypeid)
    {
    	usertypeModel::where('users_type_id', $usertypeid)->delete();

    	return redirect('userstype/');

    }
}
