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
                        <h1>Add Students</h1>
                        <div>
                            <a href="{{ url('students' )}}" class="btn btn-primary">Home</a>
                            <a href="{{ url('students' )}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>

                <div class="card-body mt-2">
                    <form method="post" action="{{ route('students.store') }}">
                    <!-- <form method="post" action="{{ url('students') }}"> -->

                        @csrf
                        <div class="form-group">
                            <label>Firstname</label>
                            <input type="text" name="fname" class="form-control" value="{{ old('fname')}}">
                            <span class="text-danger">
                                @error('fname') {{ $message }} @enderror
                            </span>
                        </div>
                        <div class="form-group mt-3">
                            <label>Lastname</label>
                            <input type="text" name="lname" class="form-control" value="{{ old('lname')}}">
                            <span class="text-danger">
                                @error('lname') {{ $message }} @enderror
                            </span>
                        </div>
                        <div class="form-group mt-3">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone')}}">
                            <span class="text-danger">
                                @error('phone') {{ $message }} @enderror
                            </span>
                        </div>
                        <div class="form-group mt-3">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address')}}">
                            <span class="text-danger">
                                @error('address') {{ $message }} @enderror
                            </span>
                        </div>
                        <div class="form-group mt-3">
                            <label>Age</label>
                            <input type="text" name="age" class="form-control" value="{{ old('age')}}">
                            <span class="text-danger">
                                @error('age') {{ $message }} @enderror
                            </span>
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection