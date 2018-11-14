<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\models\usersModels;
use App\models\usertypeModel;

class User extends Controller
{
    public function index()
    {
    	$users =   DB::table('users')
            ->select('user_id', 'names', 'lastnames', 'email', 'user_type', 'users.created_at', 'users.updated_at')
            ->join('user_types','users.user_type_id','=','user_types.user_types_id')
            ->get();
        
    	return view('users/index')->with('users',  $users);
    }

    public function create()
    {
        $userstypes =   UsertypeModel::all();
    	return view('users/create', compact('userstypes'));
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
        $userstypes =   UsertypeModel::all();
    	return view('users/edit', compact('data', 'userstypes'));
    }

    public function upgrade(usersModels $data)
    {
    	$data = Request()->all();
       	usersModels::where('user_id', $data['userid'])
    				->update([ 
                        
                            'names' => $data['name'],
                            'lastnames' => $data['lastname'],
                            'email' => $data['email'],
                            'password' => $data['password'],
                            'user_type_id' => $data['usertype']
					]);   
		return redirect('/users'); 
    }

    public function destroy($userid)
    {
    	usersModels::where('user_id', $userid)->delete();

    	return redirect('users/');

    }
}
