@extends('App.layout')

@section('Main')
<div class="container-fluid mt-1">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header" style="background-color: #D19C97;">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1>Guest Homepage</h1>
                        <div>
                        @if( session()->has('user_id') )
                                <a href="{{ route('logout' )}}" class="btn btn-primary btn-sm">Logout</a>
                            @else
                                <a href="{{ route('login' )}}" class="btn btn-primary">login</a>
                                <a href="{{ route('register' )}}" class="btn btn-primary">register</a>
                        @endif
                        </div>
                    </div>
                </div>

                <div class="card-body mt-2">
                    <h5 class="text-center">Welcome !!!</h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection