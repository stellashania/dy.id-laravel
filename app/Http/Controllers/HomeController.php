<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allProduct = Product::all();

        $data = [
            'products' => $allProduct
        ];
        return view('index', $data);
    }

    public function memberIndex(){
        $allProduct = Product::all();

        $data = [
            'products' => $allProduct
        ];
        return view('member-index', $data);
    }

    public function adminIndex(){
        $allProduct = Product::paginate(6);

        $data = [
            'products' => $allProduct
        ];
        return view('admin-index', $data);
    }
}
