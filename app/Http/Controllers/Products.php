<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Products extends Controller
{
    public function index()
	{
    	return view('products/index');
	}
}
