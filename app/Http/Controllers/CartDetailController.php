<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartDetailController extends Controller
{
    public function addItem(Request $request)
    {
        $cart_id = Auth()->user()->cart->id;
        $cart = Cart::find($cart_id);
        $product_id = $request->product_id;
        $quantity = $request->qty;
        $product = Product::find($product_id);
        $cart->products()->attach($product_id, ['quantity' => $quantity]);

        return redirect()->back();
    }

    public function deleteItem(Request $request)
    {
        $cart = Cart::find($request->cart_id);
        $cart->products()->wherePivot('product_id', '=', $request->product_id)->detach();

        return redirect()->back();
    }

    public function getUpdateItemPage(Request $request)
    {
        $cart_id = $request->cart_id;
        $product_id = $request->product_id;

        $selectedProduct = Product::where('id', $product_id)->first();

        $data = [
            'cart_id' => $cart_id,
            'product' => $selectedProduct
        ];
        return view('edit-cart', $data);
    }

    public function updateItem(Request $request)
    {
        // dd($request->qty);
        // dd($cart = Cart::find($request->cart_id));
        $cart = Cart::find($request->cart_id);
        // $cart->products()->wherePivot('product_id', '=', $request->product_id)->updateExistingPivot($request->cart_id, ['quantity' => $request->qty]);
        $cart->products()->wherePivot('cart_id', '=', $request->cart_id)->updateExistingPivot($request->product_id, ['quantity' => $request->qty]);

        return redirect()->back();
    }
}
