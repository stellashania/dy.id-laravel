@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@endsection

@section('title')
    <title>Edit Cart</title>
@endsection

@section('content')

    <div class="content flex justify-center">
        <div class="detail-product-wrapper flex">
            <div class="detail-product-left">
                <div class="detail-product-img">
                    <img src="/storage/products/{{ $product->image }}" alt="">
                </div>
            </div>

            <div class="detail-product-right">
                <div class="detail-product-contents">
                    <div class="detail-product-content">
                        <h2>{{ $product->name }}</h2>
                    </div>

                    <hr>

                    <div class="detail-product-content">
                        <h3>Price:</h3>
                        <p>IDR. {{ $product->price }}</p>
                    </div>

                    <hr>

                    <div class="detail-product-content">
                        <h3>Description:</h3>
                        <p>{{ $product->description }}</p>
                    </div>
                    <hr>
                </div>

                <div class="detail-product-btn">
                    <form action="/update-cart-item/{{ $cart_id }}/{{ $product->id }}" method="POST">
                        @csrf
                        <label for="qty">Qty:</label>
                        <input type="text" id="qty" name="qty">
                        <input type="submit" value="Save" class="yellow-btn">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
