<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Cart extends Controller
{
	function __construct(){
        $this->middleware('auth');
    }
	public function index()
	{
    	return view('cart/index');
	}
}
