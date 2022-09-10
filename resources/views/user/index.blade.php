@extends('user.layouts.master')
@section('page_style_plugins')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
@endsection
@section('main_content')
<div class="container-fluid container">
    <div class="row">
        @foreach ($cinemalists as $cinema)
            <div class="col-md-4">
                <div class="card" >
                    <img src="{{ asset($cinema->image) }}" class="card-img-top" style="height: 200px" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $cinema->name }}</h5>
                    <p class="card-text h4">Date : {{ $cinema->date }} </p>
                    <p class="card-text h4">Time : {{ $cinema->time }}</p>
                    <a href="{{ route('booking',['id' => $cinema->id]) }}" class="btn btn-primary pull-right">Booking Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection