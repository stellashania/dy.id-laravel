@extends('layouts.admin-app')

@section('title')
    <title>View Product</title>
@endsection

@section('content')
    <div class="content">
        <div class="wrapper">
            <div class="content-title">
                <h2 class="text-center">New Products</h2>
            </div>

            <table class="tbl-full">
                <tr>
                    <th>No</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Price</th>
                    <th>Product Category</th>
                    <th>Action</th>
                </tr>
                
                <tr>
                    <td>1</td>
                    <td><img src="assets/samsungtv1.jpg" alt=""></td>
                    <td>Samsung TV</td>
                    <td>Wide Color Enhancer, Connect Share Transfer, HD Resolution</td>
                    <td>20000000</td>
                    <td>Television</td>
                    <td>
                        <a href="#">
                            <button class="yellow-btn">Update</button>
                        </a>

                        <a href="#">
                            <button class="red-btn">Delete</button>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td><img src="assets/samsungtv1.jpg" alt=""></td>
                    <td>Samsung TV</td>
                    <td>Wide Color Enhancer, Connect Share Transfer, HD Resolution</td>
                    <td>20000000</td>
                    <td>Television</td>
                    <td>
                        <a href="#">
                            <button class="yellow-btn">Update</button>
                        </a>

                        <a href="#">
                            <button class="red-btn">Delete</button>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td><img src="assets/samsungtv1.jpg" alt=""></td>
                    <td>Samsung TV</td>
                    <td>Wide Color Enhancer, Connect Share Transfer, HD Resolution</td>
                    <td>20000000</td>
                    <td>Television</td>
                    <td>
                        <a href="#">
                            <button class="yellow-btn">Update</button>
                        </a>

                        <a href="#">
                            <button class="red-btn">Delete</button>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td><img src="assets/samsungtv1.jpg" alt=""></td>
                    <td>Samsung TV</td>
                    <td>Wide Color Enhancer, Connect Share Transfer, HD Resolution</td>
                    <td>20000000</td>
                    <td>Television</td>
                    <td>
                        <a href="#">
                            <button class="yellow-btn">Update</button>
                        </a>

                        <a href="#">
                            <button class="red-btn">Delete</button>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection