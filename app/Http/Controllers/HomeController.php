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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allProduct = Product::paginate(6);

        $data = [
            'products' => $allProduct
        ];
        return view('index', $data);
    }

    public function searchProducts(Request $request)
    {
        // $selectedProducts = Product::where('name', 'like', "%$request->search%")->paginate(6);

        $query = $request->search;
        $selectedProducts = Product::where('name', 'like', '%' . $query . '%')->paginate(6)->appends(['search' => $query]);


        $data = [
            'results' => $selectedProducts
        ];

        return view('search-result', $data);
    }
}
