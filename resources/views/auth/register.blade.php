@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="register-wrapper">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name"><br>
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
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email"><br>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password"><br>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

                <div class="terms-conditions">
                    <input type="checkbox" id="I-agree" value="Agree">
                    <label for="I-agree">I agree with terms & conditions</label><br>
                </div>
                <button type="submit" class="yellow-btn" id="register-btn">
                    {{ __('Register') }}
                </button>
            </form>
        </div>
    </div>
@endsection
