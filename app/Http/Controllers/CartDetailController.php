<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartDetailController extends Controller
{
    public function addItem(Request $request)
    {
        $rules = Validator::make($request->all(), [
            'qty' => ['required', 'gt:0']
        ]);
        $rules->validate();

        // $cart_id = Auth()->user()->cart->id;
        // $cart = Cart::find($cart_id);
        // $product_id = $request->product_id;
        // // dd($product_id);
        // $quantity = $request->qty;
        // $product = Product::find($product_id);
        // $cart->products()->attach($product_id, ['quantity' => $quantity]);


        $cart_id = Auth()->user()->cart->id;
        $cart = Cart::find($cart_id);
        $product_id = $request->product_id;
        // dd($product_id);
        $quantity = $request->qty;
        $product = Product::find($product_id);

        $cart_detail = CartDetail::where('cart_id', '=', $cart_id)->where('product_id', '=', $product_id)->first();

        if (!empty($cart_detail)) {
            // update
            $cart->products()->wherePivot('cart_id', '=', $cart_id)->updateExistingPivot($product_id, ['quantity' => $quantity]);
        } else {
            // add
            $cart->products()->attach($product_id, ['quantity' => $quantity]);
        }


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

        $selectedCart = Cart::where('id', $cart_id)->first();
        $selectedProduct = Product::where('id', $product_id)->first();

        $data = [
            'cart_id' => $cart_id,
            'product' => $selectedProduct
        ];

        // $data = [
        //     'cart' => $selectedCart,
        //     'product' => $selectedProduct
        // ];

        return view('edit-cart', $data);
    }

    public function updateItem(Request $request)
    {
        $rules = Validator::make($request->all(), [
            'qty' => ['required', 'gt:0']
        ]);
        $rules->validate();

        // dd($request->qty);
        // dd($cart = Cart::find($request->cart_id));
        $cart_id = $request->cart_id;
        // dd($cart_id);
        $cart = Cart::find($cart_id);
        // $cart->products()->wherePivot('product_id', '=', $request->product_id)->updateExistingPivot($request->cart_id, ['quantity' => $request->qty]);
        $cart->products()->wherePivot('cart_id', '=', $cart_id)->updateExistingPivot($request->product_id, ['quantity' => $request->qty]);

        // redirect to my cart
        // return redirect()->back();
        $user_id = Auth()->user()->id;
        return redirect()->route('view-cart', $user_id);
    }
}
