@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@endsection

@section('title')
    <title>Edit Category</title>
@endsection

@section('content')

    <div class="content">
        <div class="add-product-wrapper">
            <h2 class="blue-text left">Edit Category</h2>

            <form action="/edit-category/{{ $category->id }}" method="POST" class="add-product form align-center">
                @csrf
                <input type="text" name="name" placeholder="{{ $category->name }}"><br>
                <input type="submit" value="Add" class="add-btn">
            </form>
        </div>
    </div>

@endsection
