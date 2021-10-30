@extends('layouts.app')

@section('title')
    <title>Register</title>
@endsection

@section('content')
    <div class="content">
        <div class="register-wrapper">
            <h2 class="blue-text left">Join With Us</h2>

            <form action="" class="form align-center">
                <input type="text" placeholder="Full Name"><br>
                <div class="gender-radio">
                    <input type="radio" name="gender" id="male" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="Female">
                    <label for="female">Female</label>
                </div>
                <textarea name="" id="" rows="4" placeholder="Address"></textarea>
                <input type="text" placeholder="Address"><br>
                <input type="text" placeholder="Email"><br>
                <input type="text" placeholder="Address"><br>
                <input type="password" placeholder="Password"><br>
                <input type="password" placeholder="Confirm Password"><br>
                <div class="terms-conditions">
                    <input type="checkbox" id="I-agree" value="Agree">
                    <label for="I-agree">I agree with terms & conditions</label><br>
                </div>

                <input type="submit" value="Register Now" class="yellow-btn">
            </form>
        </div>
    </div>
@endsection
