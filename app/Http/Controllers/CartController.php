<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function displayAll(Request $request)
    {
        // $allCart = Cart::all();

        // $data = [
        //     'carts' => $allCart
        // ];

        // return view('view-cart', $data);

        // $cart = Cart::where('id', Auth()->user->cart->id)->first()->load('products');
        // $cart = Cart::where('id', $request->id)->first()->load('products');

        $user = User::find($request->id);
        $cart_id = $user->cart->id;
        $chosen_cart = Cart::find($cart_id);

        // dd(User::find($request->id));
        // dd($user->cart->id);
        // dd(Cart::find($cart_id));
        // dd(Cart::where('id', $cart_id)->get());

        // dd(Cart::where('id', $request->id)->first()->products);
        // dd(Cart::where('id', $request->id)->first()->load('products'));

        // dd($cart::with('products')->get());

        $cart = $chosen_cart::with('products')->get();

        return view('view-cart', compact('cart'));
    }
}
