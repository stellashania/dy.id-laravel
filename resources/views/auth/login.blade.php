@extends('layouts.app')

@section('title')
    <title>Guest Login</title>
@endsection

@section('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="content">
        <div class="login-wrapper" style="margin-top: 8%; margin-bottom:8%">
            <h2 class="blue-text left">Welcome Back</h2>

            <form method="POST" action="{{ route('login') }}" class="form flex align-center">
                @csrf
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="remember-me-wrapper">
                    <input type="checkbox" id="remember-me" name="remember_me" value="1">
                    <label for="remember-me">Remember me</label><br>
                </div>

                <button type="submit" class="yellow-btn" id="login-btn">
                    {{ __('Login') }}
                </button>
            </form>
        </div>
    </div>
@endsection
