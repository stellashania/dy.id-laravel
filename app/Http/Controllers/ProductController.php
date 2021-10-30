<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function displayAll()
    {
        $allProduct = Product::all();

        $data = [
            'products' => $allProduct
        ];

        return view('view-product', $data);
    }

    public function getAddProductPage()
    {
        $allCategories = Category::all();

        $data = [
            'categories' => $allCategories
        ];

        return view('add-product', $data);
    }

    public function addProduct(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $file = $request->file("image");
        // save name format: {currentTime}.{fileFormat}
        $imageName = time() . "-" . $request->name . "." . $file->getClientOriginalExtension();
        // save the image
        Storage::putFileAs("public/products", $file, $imageName);
        // point to the path of the image
        $product->image = $imageName;

        $product->save();

        return redirect()->back();
    }

    public function editProduct(Request $request)
    {
        
    }

}
