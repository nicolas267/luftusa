<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\models\usersModels;

class user extends Controller
{
    public function index()
    {
    	$users = usersModels::with('users_type')->get();
        dd($users);
    	return view('users/index')->with('users',  $users);
    }

    public function create()
    {
    	return view('users/create');
    }

    public function store()
    {
    	$data = Request()->all();
    	usersModels::create([

    			'names' => $data['name'],
    			'lastnames' => $data['lastname'],
    			'email' => $data['email'],
    			'password' => $data['password'],
    			'user_type_id' => $data['usertype']
    	]);

    	return redirect('users/');
    }

    public function edit(usersModels $data)
    {
    	return view('users/edit', compact('data'));
    }

    public function upgrade(usersModels $data)
    {
    	$data = Request()->all();
    
       	usersModels::where('user_id', $data['userid'])
    				->update(['names' => $data['name'],
    						  'lastnames' => $data['lastname'],
    						  'email' => $data['email'],
    						  'password' => $data['password']
							]);   
		return redirect('/users'); 
    }

    public function destroy($userid)
    {
    	usersModels::where('user_id', $userid)->delete();

    	return redirect('users/');

    }
}
