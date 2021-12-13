@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@endsection

@section('title')
    <title>Detail Product</title>
@endsection

@if (isset(Auth::user()->id))
    @if (Auth::user()->role == 'member')
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
                                <h3>Category:</h3>
                                <p>{{ $product->category->name }}</p>
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
                            <form action="/add-cart-item" method="POST">
                                @csrf

                                <label for="qty">Qty:</label>
                                <input type="text" id="qty" name="qty" class="@error('qty') is-invalid @enderror">
                                @error('qty')
                                    <div class="alert">{{ $message }}
                                    </div>
                                @enderror

                                {{-- TESTING PURPOSES --}}
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                {{-- TESTING PURPOSES --}}
                                <input type="submit" value="Add To Cart" class="yellow-btn">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    @elseif(Auth::user()->role == 'admin')
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
                                <h3>Category:</h3>
                                <p>{{ $product->category->name }}</p>
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
                    </div>
                </div>
            </div>
        @endsection
    @endif
@else
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
                            <h3>Category:</h3>
                            <p>{{ $product->category->name }}</p>
                        </div>

                        <hr>

                        <div class="detail-product-content">
                            <h3>Price:</h3>
                            <p>{{ $product->price }}</p>
                        </div>

                        <hr>

                        <div class="detail-product-content">
                            <h3>Description:</h3>
                            <p>{{ $product->description }}</p>
                        </div>
                        <hr>
                    </div>

                    <div class="detail-product-btn">
                        <a href="{{ url('login') }}">
                            <button class="yellow-btn">Login to buy</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endif
