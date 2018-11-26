<?php

namespace App\Http\Controllers;

use App\models\usersModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Mydata extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    
    public function edit()
    {
        return view('mydata/edit');
    }

    public function upgrade(usersModels $data)
    {
        $data = Request()->all();
        if(empty($data['password'])){
            usersModels::where('user_id', $data['userid'])
                ->update([
                    'name'     => $data['name'],
                    'lastname' => $data['lastname'],
                    'email'    => $data['email'],
                ]);
            return redirect('mydata');

        }else{

            $data = Request()->all();
            usersModels::where('user_id', $data['userid'])
                ->update([
                    'name'     => $data['name'],
                    'lastname' => $data['lastname'],
                    'email'    => $data['email'],
                    'password' => Hash::make($data['password']),
                ]);
            return redirect('mydata');
        }
    }
}
