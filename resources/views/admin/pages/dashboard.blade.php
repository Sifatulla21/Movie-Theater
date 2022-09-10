@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <div class="row p-2">
        <div class="col-md-4">
            <div class="bg-secondary h-100 p-2">
                <h2>Order List</h2>
                <hr>
                <a href="http://127.0.0.1:8000/admin/order" class="btn btn-primary pull-right p-2 mb-2">View</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-secondary h-100 p-2">
                <h2>Cinema List</h2>
                <hr>
                <a href="http://127.0.0.1:8000/admin/cinemahall" class="btn btn-primary pull-right p-2 mb-2">View</a>
            </div>
        </div>
    </div>
</div>
@endsection

