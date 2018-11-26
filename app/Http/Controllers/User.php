<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\models\usersModels;
use App\models\usertypeModel;
use Illuminate\Support\Facades\Hash;

class User extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
    	$users =   DB::table('users')
            ->select('user_id', 'name', 'lastname', 'email', 'user_type', 'users.created_at', 'users.updated_at')
            ->join('user_types','users.user_type_id','=','user_types.user_type_id')
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

    			'name' => $data['name'],
    			'lastname' => $data['lastname'],
    			'email' => $data['email'],
    			'password' => Hash::make($data['password']),
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
                        
                            'name' => $data['name'],
                            'lastname' => $data['lastname'],
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
