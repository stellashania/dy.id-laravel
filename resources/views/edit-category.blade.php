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

            <form action="/edit-category/{{ $category->id }}" method="POST"
                class="add-product form align-center @error('name') is-invalid @enderror">
                @csrf
                <input type="text" name="name" value="{{ old('name') ?? $category->name }}"><br>
                @error('name')
                    <div class="alert">{{ $message }}
                    </div>
                @enderror

                <input type="submit" value="Save" class="add-btn">
            </form>
        </div>
    </div>

@endsection
