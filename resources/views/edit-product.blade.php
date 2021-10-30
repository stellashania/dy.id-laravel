@extends('layouts.admin-app')

@section('title')
    <title>Edit Product</title>
@endsection

@section('content')
    <div class="content">
        <div class="add-product-wrapper">
            <h2 class="blue-text left">Edit Product</h2>

            <form action="" class="add-product form align-center">
                <input type="text" placeholder="Product Name"><br>
                <textarea name="" id="" rows="4" placeholder="Product Description"></textarea>
                <input type="text" placeholder="Product Price"><br>
                <label for="product-cat">Product Category</label> <br>
                <select name="product-cat" id="product-cat"> 
                    <option value="" selected disabled hidden>Choose One</option>
                </select>
                <br>
                <label for="choose-file">Product Image</label> <br>
                <label for="choose-file" class="custom-file-upload">
                    Choose File
                </label>
                <input type="file" id="choose-file" name="filename">
                <br>
                
                <input type="submit" value="Add" class="add-btn">
            </form>
        </div>
    </div>

@endsection