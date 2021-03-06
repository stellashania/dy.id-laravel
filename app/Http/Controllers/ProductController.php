<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function index()
    {
        $allProduct = Product::paginate(6);

        $data = [
            'products' => $allProduct
        ];

        return view('index', $data);
    }

    public function getDetailProduct(Request $request)
    {
        $product = Product::find($request->id);

        $data = [
            'product' => $product
        ];

        return view('detail-product', $data);
    }

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
        $rules = Validator::make($request->all(), [
            'name' => ['required', 'unique:products', 'min:5'],
            'description' => ['required', 'min:50'],
            'price' => ['required', 'numeric', 'gt:0'],
            'category' => ['required'],
            'image' => ['required', 'image', 'mimes:jpg']
        ]);
        $rules->validate();

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

    public function getEditProductPage(Request $request)
    {
        $id = $request->id;

        $selectedProduct = Product::where('id', $id)->first();
        $allCategories = Category::all();

        $data = [
            'product' => $selectedProduct,
            'categories' => $allCategories
        ];
        return view('edit-product', $data);
    }

    public function editProduct(Request $request)
    {
        $rules = Validator::make($request->all(), [
            'name' => ['required', 'unique:products,name,' . $request->id, 'min:5'],
            'description' => ['required', 'min:50'],
            'price' => ['required', 'numeric', 'gt:0'],
            'category' => ['required'],
            'image' => ['required', 'image', 'mimes:jpg']
        ]);
        $rules->validate();

        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category;

        $file = $request->file("image");

        if ($file != null) {
            // save name format: {currentTime}.{fileFormat}
            $imageName = time() . "-" . $request->name . "." . $file->getClientOriginalExtension();
            // save the image
            Storage::putFileAs("public/products", $file, $imageName);

            // ideally, we want to override the older image file if it's updated
            // notice that we no longer need to append `/images`
            // since it is contained in the image file name
            Storage::delete("public/products/" . $product->image);

            // point to the path of the image
            $product->image = $imageName;
        }

        $product->save();

        //redirect to view products
        // return redirect()->back();
        return redirect()->route('view-product');
    }

    public function deleteProduct(Request $request)
    {
        $id = $request->id;
        $product = Product::where('id', $id)->first();
        Storage::delete("public/products" . $product->image);
        $product->delete();

        return redirect()->back();
    }
}
