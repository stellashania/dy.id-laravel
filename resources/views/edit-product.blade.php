@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@endsection

@section('title')
    <title>Edit Product</title>
@endsection

@section('content')
    <div class="content">
        <div class="add-product-wrapper">
            <h2 class="blue-text left">Edit Product</h2>

            <form action="/edit-product/{{ $product->id }}" method="post" enctype="multipart/form-data"
                class="add-product form align-center">
                @csrf
                <input type="text" placeholder="{{ $product->name }}" name="name"><br>
                <textarea name="description" id="" rows="4" placeholder="{{ $product->description }}"></textarea>
                <input type="text" placeholder="{{ $product->price }}" name="price"><br>
                <label for="product-cat">Product Category</label> <br>
                <select name="category" id="product-cat">
                    <option value="" selected disabled hidden>Choose One</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $product->category_id ? 'selected' : '' }}>
                            {{ $item->name }}</option>
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
