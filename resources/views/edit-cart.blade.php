@extends('layouts.member-app')

@section('title')
    <title>Edit Cart</title>
@endsection

@section('content')

    <div class="content flex justify-center">
        <div class="detail-product-wrapper flex">
            <div class="detail-product-left">
                <div class="detail-product-img">
                    <img src="assets/samsungtv1.jpg" alt="">
                </div>
            </div>

            <div class="detail-product-right">
                <div class="detail-product-contents">
                    <div class="detail-product-content">
                        <h2>Samsung TV</h2>
                    </div>

                    <hr>

                    <div class="detail-product-content">
                        <h3>Price:</h3>
                        <p>IDR. 20.000.000</p>
                    </div>

                    <hr>

                    <div class="detail-product-content">
                        <h3>Description:</h3>
                        <p>Witness the high quality TV with new technology from Samsung</p>
                    </div>
                    <hr>
                </div>

                <div class="detail-product-btn">
                    <form action="">
                        <label for="qty">Qty:</label>
                        <input type="text" id="qty" name="qty">
                        <input type="submit" value="Save" class="yellow-btn">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection