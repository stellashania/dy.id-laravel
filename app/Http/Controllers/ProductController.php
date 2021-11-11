<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index(){
        $allProduct = Product::paginate(6);

        $data = [
            'products' => $allProduct
        ];

        return view('index', $data);
    }

    public function memberIndex(){
        $allProduct = Product::paginate(6);


        $data = [
            'products' => $allProduct
        ];

        return view('member-index', $data);
    }

    public function adminIndex(){
<<<<<<< Updated upstream
=======
        // $allProduct = Product::all()->paginate(6);
>>>>>>> Stashed changes
        $allProduct = Product::paginate(6);

        $data = [
            'products' => $allProduct
        ];

        return view('admin-index', $data);
    }

    public function getAdminDetailProduct(Request $request){
        $id = $request->id;

        $product = Product::where('id', $id)->first();

        $data = [
            'product' => $product
        ];

        return view('admin-detail-product', $data);
    }

    public function getMemberDetailProduct(Request $request){
        $id = $request->id;

        $product = Product::where('id', $id)->first();

        $data = [
            'product' => $product
        ];

        return view('member-detail-product', $data);
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
        return redirect()->back();
    }

    public function deleteProduct(Request $request){
        $id = $request->id;
        $product = Product::where('id', $id)->first();
        Storage::delete("public/products" . $product->image);
        $product->delete();

        return redirect()->back();
    }

    public function getDetailProduct(Request $request){
        $product = Product::find($request->id);

        $data = [
            'selectedProduct' => $product
        ];

        return view('detail-product', $data);
    }
}
