<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function displayAll()
    {
        $allCart = Cart::all();

        $data = [
            'carts' => $allCart
        ];

        return view('view-cart', $data);
    }

    public function addProduct(Request $request)
    {
        $cart = new Cart();
        $cart->product_id = $request->product_id;
        $cart->quantity = $request->quantity;

        $cart->save();

        return redirect()->back();
    }
}
