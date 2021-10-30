<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function displayAll()
    {
        $allCategory = Category::all();

        $data = [
            'category' => $allCategory
        ];

        return view('view-category', $data);
    }

    public function getAddCategoryPage(){
        return view('add-category');
    }

    public function addCategory(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;

        $category->save();

        return redirect()->back();
    }

    public function getEditCategoryPage(Request $request)
    {
        $id = $request->id;
        
        $selectedCategory = Category::where('id', $id)->first();

        $data = [
            'category' => $selectedCategory
        ];
        return view('edit-category', $data);
    }

    public function editCategory(Request $request)
    {
        $id = $request->id;
        $category = Category::where('id', $id)->first();
        $category->name = $request->name;

        $category->save();
        return redirect()->back();
    }

    public function deleteCategory(Request $request){
        $id = $request->id;
        $category = Category::where('id', $id)->first();
        $category->delete();

        return redirect()->back();
    }
}
