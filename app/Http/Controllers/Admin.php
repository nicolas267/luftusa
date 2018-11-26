<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Admin extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
}
