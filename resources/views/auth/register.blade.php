@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="content">
        <div class="register-wrapper">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name"><br>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="gender">Gender</label>
                <div class="gender-radio">
                    <input type="radio" name="gender" id="male" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="Female">
                    <label for="female">Female</label>
                </div>
                <br>

                <textarea id="address" name="address" class="form-control @error('address') is-invalid @enderror"
                    name="address" value="{{ old('address') }}" required autocomplete="address" autofocus rows="4"
                    cols="50" placeholder="Enter your address"></textarea>
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" placeholder="Email"><br>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password" placeholder="Password"><br>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Confirm Password">
                <br>

                <label for="role">Role</label>
                <div class="gender-radio">
                    <input type="radio" name="role" id="member" value="member">
                    <label for="member">Member</label>
                    <input type="radio" name="role" id="admin" value="admin">
                    <label for="admin">Admin</label>
                </div>

                <div class="terms-conditions">
                    <input type="checkbox" id="agreement" name="agreement" value="1"
                        class="@error('agreement') is-invalid @enderror">
                    <label for="agreement">I agree with terms & conditions</label><br>
                    @error('agreement')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <button type="submit" class="yellow-btn" id="register-btn">
                    {{ __('Register') }}
                </button>
            </form>
        </div>
    </div>
@endsection
