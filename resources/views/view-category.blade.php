@extends('layouts.admin-app')

@section('title')
    <title>View Category</title>
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
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
                
                @php
                    $idx = 0;
                @endphp 
                @foreach($category as $item)
                <tr>
                    <td>{{ ++$idx }}</td>
                    <td>{{ $item->name}}</td>
                    <td>
                        <a href="/edit-category/{{ $item->id }}" class="yellow-btn">
                            Update
                        </a>
                        
                        <form action="/delete-category/{{ $item->id }}" method="POST">
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