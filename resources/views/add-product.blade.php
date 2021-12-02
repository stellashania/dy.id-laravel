@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@endsection

@section('title')
    <title>Insert New Product</title>
@endsection

@section('content')
    <div class="content">
        <div class="add-product-wrapper">
            <h2 class="blue-text left">Insert New Product</h2>

            <form action="/add-product" method="post" enctype="multipart/form-data" class="add-product form align-center">
                @csrf
                <input type="text" placeholder="Product Name" name="name"><br>
                <textarea name="description" id="" rows="4" placeholder="Product Description"></textarea>
                <input type="text" placeholder="Product Price" name="price"><br>
                <label for="product-cat">Product Category</label> <br>
                <select name="category" id="product-cat">
                    <option value="" selected disabled hidden>Choose One</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                <br>
                <label for="choose-file">Product Image</label> <br>
                <label for="choose-file" class="custom-file-upload">
                    Choose File
                </label>
                <input type="file" id="choose-file" name="image">
                <br>

                <input type="submit" value="Add" class="add-btn">
            </form>
        </div>
    </div>

@endsection
