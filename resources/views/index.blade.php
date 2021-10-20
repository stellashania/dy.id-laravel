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

            {{-- <div class="products">
                @for ($i = 0; $i < 6; $i++)
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ URL('assets/samsungtv1.jpg') }}" alt="">
                        </div>

                        <div class="product-desc flex space-between">
                            <h3>Samsung TV</h3>
                            <p>Television</p>
                        </div>

                        <div class="product-price">
                            <p>IDR. 21.000.000</p>
                        </div>

                        <div class="product-detail-btn">
                            <a href="#">
                                <button class="yellow-btn">More Detail</button>
                            </a>
                        </div>
                    </div>
                @endfor
            </div> --}}

            <div class="products">
                <div class="products-row">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ URL('assets/samsungtv1.jpg') }}" alt="">
                        </div>

                        <div class="product-desc flex space-between">
                            <h3>Samsung TV</h3>
                            <p>Television</p>
                        </div>

                        <div class="product-price">
                            <p>IDR. 21.000.000</p>
                        </div>

                        <div class="product-detail-btn">
                            <a href="#">
                                <button class="yellow-btn">More Detail</button>
                            </a>
                        </div>
                    </div>

                    <div class="product">
                        <div class="product-img">
                            <img src="{{ URL('assets/samsungtv1.jpg') }}" alt="">
                        </div>

                        <div class="product-desc flex space-between">
                            <h3>Samsung TV</h3>
                            <p>Television</p>
                        </div>

                        <div class="product-price">
                            <p>IDR. 21.000.000</p>
                        </div>

                        <div class="product-detail-btn">
                            <a href="#">
                                <button class="yellow-btn">More Detail</button>
                            </a>
                        </div>
                    </div>

                    <div class="product">
                        <div class="product-img">
                            <img src="{{ URL('assets/samsungtv1.jpg') }}" alt="">
                        </div>

                        <div class="product-desc flex space-between">
                            <h3>Samsung TV</h3>
                            <p>Television</p>
                        </div>

                        <div class="product-price">
                            <p>IDR. 21.000.000</p>
                        </div>

                        <div class="product-detail-btn">
                            <a href="#">
                                <button class="yellow-btn">More Detail</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="products-row">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ URL('assets/samsungtv1.jpg') }}" alt="">
                        </div>

                        <div class="product-desc flex space-between">
                            <h3>Samsung TV</h3>
                            <p>Television</p>
                        </div>

                        <div class="product-price">
                            <p>IDR. 21.000.000</p>
                        </div>

                        <div class="product-detail-btn">
                            <a href="#">
                                <button class="yellow-btn">More Detail</button>
                            </a>
                        </div>
                    </div>

                    <div class="product">
                        <div class="product-img">
                            <img src="{{ URL('assets/samsungtv1.jpg') }}" alt="">
                        </div>

                        <div class="product-desc flex space-between">
                            <h3>Samsung TV</h3>
                            <p>Television</p>
                        </div>

                        <div class="product-price">
                            <p>IDR. 21.000.000</p>
                        </div>

                        <div class="product-detail-btn">
                            <a href="#">
                                <button class="yellow-btn">More Detail</button>
                            </a>
                        </div>
                    </div>

                    <div class="product">
                        <div class="product-img">
                            <img src="{{ URL('assets/samsungtv1.jpg') }}" alt="">
                        </div>

                        <div class="product-desc flex space-between">
                            <h3>Samsung TV</h3>
                            <p>Television</p>
                        </div>

                        <div class="product-price">
                            <p>IDR. 21.000.000</p>
                        </div>

                        <div class="product-detail-btn">
                            <a href="#">
                                <button class="yellow-btn">More Detail</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @section('style')
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endsection --}}