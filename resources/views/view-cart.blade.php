@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@endsection

@section('title')
    <title>My Cart</title>
@endsection

@section('content')
    <div class="content">
        <div class="wrapper">
            <div class="content-title">
                <h2>My Cart</h2>
            </div>

            <div class="cart-item flex">
                <div class="cart-item-img">
                    <img src="assets/samsungtv1.jpg" alt="">
                </div>

                <div class="cart-item-contents">
                    <div class="cart-item-content flex">
                        <h3>Samsung TV </h3>
                        <p>(IDR. 20.000.000)</p>
                    </div>

                    <div class="cart-item-content">
                        <p>x2 pcs</p>
                    </div>

                    <div class="cart-item-content">
                        <p>IDR. 40.000.000</p>
                    </div>

                    <div class="cart-item-buttons flex">
                        <button class="yellow-btn">Edit</button>
                        <button class="red-btn">Delete</button>
                    </div>
                </div>
            </div>

            <div class="cart-item flex">
                <div class="cart-item-img">
                    <img src="assets/samsungtv1.jpg" alt="">
                </div>

                <div class="cart-item-contents">
                    <div class="cart-item-content flex">
                        <h3>Samsung TV </h3>
                        <p>(IDR. 20.000.000)</p>
                    </div>

                    <div class="cart-item-content">
                        <p>x2 pcs</p>
                    </div>

                    <div class="cart-item-content">
                        <p>IDR. 40.000.000</p>
                    </div>

                    <div class="cart-item-buttons flex">
                        <button class="yellow-btn">Edit</button>
                        <button class="red-btn">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
