@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@endsection

@section('title')
    <title>Guest Home</title>
@endsection

@section('content')
    <div class="content">
        <div class="product-wrapper">
            <div class="content-title">
                <h2 class="text-center">New Products</h2>
            </div>

            <div class="products">

                @foreach ($results as $item)
                    <div class="product">
                        <div class="product-img">
                            <img src="./storage/products/{{ $item->image }}" style="width: 98%" alt="">
                        </div>

                        <div class="product-desc flex space-between">
                            <h3>{{ $item->name }}</h3>
                            <p>{{ $item->category->name }}</p>
                        </div>

                        <div class="product-price">
                            <p>IDR. {{ $item->price }}</p>
                        </div>

                        <div class="product-detail-btn">
                            <a href="/detail-product/{{ $item->id }}" class="yellow-btn">
                                More Detail
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

            {{ $results->links('pagination::bootstrap-4') }}
            {{-- {{ $results->appends(['searchProducts' => Request::get('page')])->links('pagination::bootstrap-4') }} --}}
        </div>
    </div>
@endsection
