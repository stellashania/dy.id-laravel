@extends('layouts.admin-app')

@section('title')
    <title>Admin Home</title>
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
                            <img src="/storage/products/{{$item->image}}" alt="">
                        </div>

                        <div class="product-desc flex space-between">
                            <h3>{{ $item->name }}</h3>
                            <p>{{ $item->category->name }}</p>
                        </div>

                        <div class="product-price">
                            <p>IDR. {{$item->price}}</p>
                        </div>

                        <div class="product-detail-btn">
                            <a href="/admin-detail-product/{{ $item->id }}" class="yellow-btn">
                                More Detail
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{$products->links('vendor.pagination.custom')}}
        </div>
    </div>
@endsection