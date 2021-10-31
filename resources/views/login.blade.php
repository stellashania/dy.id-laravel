@extends('layouts.guest-app')

@section('title')
    <title>Guest Login</title>
@endsection

@section('content')
    <div class="content">
        <div class="login-wrapper">
            <h2 class="blue-text left">Welcome Back</h2>

            <form action="" class="form flex align-center">
                <input type="text" placeholder="Email"><br>
                <input type="password" placeholder="Password"><br>
                <div class="remember-me-wrapper flex">
                    <input type="checkbox" id="remember-me" value="remember">
                    <label for="remember-me">Remember me</label><br>
                </div>

                <input type="submit" value="Login" class="yellow-btn float-right">
            </form>
        </div>
    </div>
@endsection

{{-- @section('style')
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endsection --}}