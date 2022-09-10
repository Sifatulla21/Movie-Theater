@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <div class="w-50 mx-auto bg-danger p-2 mt-5">
            <h2 class="text-center text-light">Admin Register</h2>
            <form action="{{ route('admin.save') }}" method="post">
                @csrf
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::get('failed'))
                    <div class="alert alert-danger">
                        {{ Session::get('failed') }}
                    </div>
                @endif
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        <span class="text-light">@error('name'){{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        <span class="text-light">@error('email'){{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                        <span class="text-light">@error('phone'){{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" >
                        <span class="text-light">@error('password'){{ $message }} @enderror</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <br>
                <a class="text-light" href="{{ route('admin.login') }}">Already have a account, sign in</a>
            </form>
        </div>
    </div>
@endsection