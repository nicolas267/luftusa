<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Shipping extends Controller
{
   public function index()
   {
		return view('shipping.index');
   }
}
