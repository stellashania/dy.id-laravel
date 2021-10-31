@extends('layouts.app')

@section('title')
    <title>Guest Home</title>
@endsection

@section('content')
    <div class="content">
        <div class="wrapper">
            <div class="content-title">
                <h2 class="text-center">New Products</h2>
            </div>

            <div class="products">

                @foreach ($products as $item)
                    <div class="product">
                        <div class="product-img">
                            <img src="./storage/products/{{$item->image}}" alt="">
                        </div>

                        <div class="product-desc flex space-between">
                            <h3>{{ $item->name }}</h3>
                            <p>{{ $item->category->name }}</p>
                        </div>

                        <div class="product-price">
                            <p>IDR. {{$item->price}}</p>
                        </div>

                        <div class="product-detail-btn">
                            <a href="#">
                                <button class="yellow-btn">More Detail</button>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

{{-- @section('style')
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endsection --}}