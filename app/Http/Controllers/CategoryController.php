<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function getAddCategoryPage()
    {
        return view('add-category');
    }

    public function addCategory(Request $request)
    {
        $rules = Validator::make($request->all(), [
            'name' => ['required', 'unique:categories', 'min:2']
        ]);
        $rules->validate();

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
        $rules = Validator::make($request->all(), [
            'name' => ['required', 'unique:categories', 'min:2']
        ]);
        $rules->validate();

        $id = $request->id;
        $category = Category::where('id', $id)->first();
        $category->name = $request->name;

        $category->save();

        // redirect to view categories
        // return redirect()->back();
        return redirect()->route('view-category');
    }

    public function deleteCategory(Request $request)
    {
        $id = $request->id;
        $category = Category::where('id', $id)->first();
        $category->delete();

        return redirect()->back();
    }
}
