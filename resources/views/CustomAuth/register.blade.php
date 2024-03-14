@extends('App.layout')

@section('Main')

<!-- Register section start -->
<div class="container-fluid mt-5 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-md-12">

                <div class="card" style="background-color: #D19C97;" id="register-card">
                    <div class="card-header" style="text-align: center; color: black; font-size: 2.2rem; font-weight:550;">
                        Sign up
                    </div>
                    <div class="card-body"  >
                        <form action="/register" method="post" title="Register">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="" class="text-white">Full Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name')}}" style="background-color: transparent; color: whitesmoke;" placeholder="Enter your full name" autofocus>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="text-white">Email</label>
                                <input type="text" name="email" class="form-control" value="{{ old('email')}}" style="background-color: transparent; color: whitesmoke;" placeholder="Enter your Email" autofocus>
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="text-white">Password</label>
                                <input type="text" name="password" class="form-control" value="{{ old('password')}}" style="background-color: transparent; color: whitesmoke;" placeholder="Create Strong Password" autofocus>
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="text-white">Re-Password</label>
                                <input type="text" name="password_confirmation" class="form-control" value="{{ old('re_password')}}" style="background-color: transparent; color: whitesmoke;" placeholder="Enter Password to Confirm" autofocus>
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="register-btn d-flex justify-content-center">
                                <button type="submit" class="btn btn-secondary" id="register-btn">
                                    Register
                                </button>
                            </div>
                        </form>

                        <div class="already-register mt-2 d-flex justify-content-center text-white">
                        Already Registered?
                            <a href="{{ url('/login') }}" class="text-white ml-2">Signin</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Register section end -->


@endsection