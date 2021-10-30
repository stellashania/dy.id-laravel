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

                @php
                    $idx = 0;
                @endphp 
                @foreach($products as $item)
                <tr>
                    <td>{{ ++$idx }}</td>
                    <td><img src="../storage/products/{{ $item->image}}" alt=""></td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->category_id }}</td>
                    <td>

                        <form action="/edit-product/{{ $item->id }}" method="POST">
                            @csrf
                            <input type="submit" value="Update" class="yellow-btn">
                        </form>

                        <form action="/delete-product/{{ $item->id }}" method="POST">
                            @csrf
                            <input type="submit" value="Delete" class="red-btn">
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection