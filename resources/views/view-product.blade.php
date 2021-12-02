@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@endsection

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
                @foreach ($products as $item)
                    <tr>
                        <td>{{ ++$idx }}</td>
                        <td>
                            <img src="../storage/products/{{ $item->image }}" alt="" style="height:10rem; width:auto">
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td style="width: 10%">{{ $item->price }}</td>
                        <td style="width: 6%">{{ $item->category->name }}</td>
                        <td style="width: 15%">

                            {{-- <a href="/edit-product/{{ $item->id }}" class="yellow-btn">
                            Update
                        </a>

                        <form action="/delete-product/{{ $item->id }}" method="POST">
                            @csrf
                            <input type="submit" value="Delete" class="red-btn">
                        </form> --}}

                            <div class="flex">
                                <a href="/edit-product/{{ $item->id }}" class="yellow-btn"
                                    style="margin-right: 0.5rem; padding-bottom: 0rem">
                                    Update
                                </a>

                                <form action="/delete-product/{{ $item->id }}" method="POST">
                                    @csrf
                                    <input type="submit" value="Delete" class="red-btn">
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
