@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@endsection

@section('title')
    <title>Insert New Category</title>
@endsection

@section('content')
    <div class="content">
        <div class="add-product-wrapper">
            <h2 class="blue-text left">Insert New Category</h2>

            <form action="/add-category" method="POST" class="add-product form align-center">
                @csrf
                <input type="text" name="name" placeholder="Category Name"><br>
                <input type="submit" value="Add" class="add-btn">
            </form>
        </div>
    </div>

@endsection
