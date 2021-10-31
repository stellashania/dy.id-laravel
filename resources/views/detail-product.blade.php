@extends('layouts.app')

@section('title')
    <title>Detail Product</title>
@endsection

@section('content')
    <div class="content flex justify-center">
        <div class="detail-product-wrapper flex">
            <div class="detail-product-left">
                <div class="detail-product-img">
                    <img src="/storage/products/{{$selectedProduct->image}}" alt="">
                </div>
            </div>

            <div class="detail-product-right">
                <div class="detail-product-contents">
                    <div class="detail-product-content">
                        <h2>{{ $selectedProduct->name }}</h2>
                    </div>

                    <hr>

                    <div class="detail-product-content">
                        <h3>Category:</h3>
                        <p>{{ $selectedProduct->category->name }}</p>
                    </div>

                    <hr>

                    <div class="detail-product-content">
                        <h3>Price:</h3>
                        <p>{{ $selectedProduct->price }}</p>
                    </div>

                    <hr>

                    <div class="detail-product-content">
                        <h3>Description:</h3>
                        <p>{{ $selectedProduct->description }}</p>
                    </div>
                    <hr>
                </div>

                <div class="detail-product-btn">
                    <a href="/login">
                        <button class="yellow-btn">Login to buy</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection