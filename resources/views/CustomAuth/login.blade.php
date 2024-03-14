@extends('App.layout')
@section('Main')

<!-- Login section start -->
<div class="m-3 d-flex" style="width: 100%;">
    <a href="{{ route('guesthome')}}" class="btn btn-success btn-sm">HOME</a>
    @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
</div>
    <div class="container mt-3">
        <div class="wrapper" style="background-color: #D19C97;">

            <form action="/login" method="post">
                @csrf
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" name="email" value="{{ old('email')}}" placeholder="Username or email" autofocus>
                </div>
                <div class="input-box">
                    <input type="password" name="password" value="{{ old('password')}}" placeholder="Password" autofocus>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>

                <button type="submit" id="login-btn">Login</button>

                <div class="sign-with">
                    <p>Or login with</p>
                    <a href="#" class="google" > <i class='bx bxl-google'></i>
                    Continue with Google </a>
                </div>
                <div class="register-link">
                    <p>Don't have an account? <a href="{{ url('/register') }}">Register</a> </p>
                </div>
            </form>
        </div>
    </div>
<!-- Login section end -->

@endsection