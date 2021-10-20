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
                
                <tr>
                    <td>1</td>
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
                    <td>Laptop</td>
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
                    <td>Smartphone</td>
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