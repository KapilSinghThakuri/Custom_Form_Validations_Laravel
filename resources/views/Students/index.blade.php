@extends('App.layout')

@section('Main')
<div class="container-fluid mt-1">
    <div class="row">
        <div class="col-md-12">
            @if( session('message') )
            <div class="alert alert-primary">{{ session('message') }} </div>
            @endif
            @if( session('fails') )
                <div class="alert alert-danger">{{ session('fails') }}</div>
            @endif

            <div class="card">
                <div class="card-header" style="background-color: #D19C97;">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1>Students Homepage</h1>
                        <div>
                            <a href="{{ url('students/create' )}}" class="btn btn-primary">ADD STUDENT</a>
                        </div>
                    </div>
                </div>
                <div class="card-body mt-2">
                    <h3>Students Details</h3>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection