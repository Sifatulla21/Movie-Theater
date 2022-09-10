@extends('guest.layouts.master')
@section('page_style_plugins')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
@endsection
@section('main_content')
<x-feature title="Conact" name="assets/logo/slide1.jpg" />
<section class="container-fluid mt-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center">Let's Talk about Your Business</h2>
                <div class="bg-danger w-25 mx-auto" style="height: 2px;"></div>
                <form class="bg-light" style="padding: 10px">
                    <div class="row">
                        <div class="col">
                            <label class="text-dark h5">First Name</label>
                            <input type="text" required class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                           <label class="text-dark h5">Last Name</label>
                           <input type="text" required class="form-control" placeholder="Last name">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label class="text-dark h5">Email</label>
                            <input type="email" class="form-control" placeholder="examplel@mail.com">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label class="text-dark h5">Mobile Number</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col">
                            <label class="text-dark h5">Current City</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label class="text-dark h5">Interested Country</label>
                            <select class="form-control">
                                <option>Selcet Option</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="text-dark h5">Interested Program</label>
                            <select class="form-control">
                                <option>Selcet Option</option>
                          </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label class="text-dark h5">Interested Specialization</label>
                            <input type="text" class="form-control" >
                        </div>
                        <div class="col">
                            <label class="text-dark h5">Interested University</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="text-dark h5">Comment: </label>
                        </div>
                        <div class="col-md-8">
                            <textarea class="textArea" cols="40"></textarea>
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-success">Submit</button>
                </form>
            </div>
            <div class="col-md-6 ">
                @foreach ($contacts as $item)
                    <x-contact title="{{ $item->title }}" array="{{ $item->description }}" />
                @endforeach
                <div class="row border shadow-sm m-1 p-2">
                    <div class="col-md-3">
                        <div class="text-danger ps-4 pt-4" style="font-size:60px"><i class="fa fa-connectdevelop" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-9 text-left">
                        <h3 class="fw-bold">Email</h3>
                        <hr>
                        <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>09611123123</p>
                        <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>09611123123</p>
                    </div>
                </div>
                <div class="row border shadow-sm m-1 p-2">
                    <div class="col-md-3">
                        <div class="text-danger ps-4 pt-4" style="font-size:60px"><i class="fa fa-connectdevelop" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-9 text-left">
                        <h3 class="fw-bold">Our Corporate Office</h3>
                        <hr>
                        <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>09611123123</p>
                        <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>09611123123</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection