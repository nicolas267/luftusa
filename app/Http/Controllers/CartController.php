<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $data = Cart::getContent();
        return view('cart/index', compact('data'));
    }

    public function store(Request $request)
    {
        $add = Cart::add([
            'id'       => $request->id,
            'name'     => $request->name,
            'price'    => $request->price,
            'quantity' => $request->qty,
        ]);

        if ($add) {
            return redirect('cart');
        }
    }

    public function update(Request $request, $id)
    {
        $update = Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value'    => $request->qty,
            ),
        ));

        if ($update) {
            return redirect('cart');
        }
    }

    public function destroy($id)
    {
        $delete = Cart::remove($id);
        if ($delete) {
            return redirect('cart');
        }
    }
}
