@extends('App.layout')

@section('Main')
<div class="container-fluid mt-1">
    <div class="row">
        <div class="col-md-12">
            @if( session('message'))
            <div class="alert alert-primary">
                {{ session('message') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header" style="background-color: #D19C97;">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1>Admin Homepage</h1>
                        <div>
                            @if( session()->has('user_id') )
                                    <a href="{{ route('logout' )}}" class="btn btn-primary btn-sm">Logout</a>
                                @else
                                    <a href="{{ route('login' )}}" class="btn btn-primary btn-sm">login</a>
                                    <a href="{{ route('register' )}}" class="btn btn-primary btn-sm">register</a>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="card-body mt-2">
                    <h5 class="text-center">Welcome Mr. {{ $userName ?? 'No Username Found!!!'}}</h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection