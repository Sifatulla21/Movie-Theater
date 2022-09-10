@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <div class="w-50 mx-auto bg-danger p-2 mt-5">
            <h2 class="text-center text-light">Admin Login</h2>
            @if (Session::get('error') || Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }} {{ Session::get('fail') }}
                    </div>
            @endif
            @if (Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
            @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <form action="{{ route('admin.auth') }}" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        <span class="text-light">@error('email'){{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password">
                        <span class="text-light">@error('password'){{ $message }} @enderror</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">login</button>
                <br>
                <a class="text-light" href="{{ route('admin.register') }}">create a account, sign up</a>
            </form>
        </div>
    </div>
@endsection