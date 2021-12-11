<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function checkout(Request $request)
    {
        // create new transaction
        $transaction = new Transaction();
        $transaction->user_id = Auth()->user()->id;
        $currTime = Carbon::now();
        // dd($currTime->format('Y-m-d H:i:s'));
        $transaction->transaction_date = $currTime->format('Y-m-d H:i:s');
        $transaction->transaction_date = $currTime;
        $transaction->save();

        // dd($transaction);
        // add the cart detail to transaction detail
        $cart = Cart::find($request->cart_id);

        $products = $cart->products()->get(['product_id']);
        $quantity = $cart->products()->get(['quantity']);

        for ($i = 0; $i < sizeof($products); $i++) {
            // dd($products[2]);
            $product_id = $products[$i];
            $qty = $quantity[$i];
            // dd($qty);
            $transaction->products()->attach($product_id->product_id, ['quantity' => $qty->quantity]);

            // WHY ON EARTH U NEED POINTER AGAIN HUH
            // $transaction->products()->attach($product_id, ['quantity' => $qty]);
        }

        //delete cart detail (detach)
        $cart->products()->detach();

        // redirect
        return redirect()->back();
    }

    public function displayAll()
    {
        $user = Auth::user();
        $transactions = $user->transactions()->get();

        return view('history-transaction', compact('transactions'));
    }
}
