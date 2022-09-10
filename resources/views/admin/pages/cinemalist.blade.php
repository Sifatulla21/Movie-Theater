@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">Cinema List</h2>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-responsive">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($cinemalists as $cinema)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $cinema->name }}</td>
                    <td><img width="50" src="{{ asset($cinema->image) }}" alt="ii"></td>
                    <td>{{ $cinema->date }}</td>
                    <td>{{ $cinema->time }}</td>
                    <td data-image="{{ $cinema->image }}" >
                      <x-modal 
                        type="editmodal" 
                        route="cinemahall.update,cinemahall=>{{ $cinema->id }}" 
                        title="Edit Data" id="{{ $cinema->id }}"/> ||
                        @if (Auth::user()->role == 'admin')
                        <button class="btn btn-danger" onclick="deleteData('{{ route('cinemahall.destroy',['cinemahall'=>$cinema->id]) }}')">
                          Delete</button>
                        @endif
                        
                    </td>
                  </tr>   
                  @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h3 class="text-center text-dark fw-bold p-3">Add Cinema--</h3>
            @if (Session::get('error'))
              <div class="alert alert-danger">
                  {{ Session::get('error') }}
              </div>
            @endif
            @if (Session::get('success'))
              <div class="alert alert-success">
                  {{ Session::get('success') }}
              </div>
            @endif
            @php
              $message="ddd"
            @endphp
            <form action="{{ route('cinemahall.store') }}" enctype="multipart/form-data" class="p-3 border border-3" method="post">
              @csrf
                <div class="mb-3 row">
                  <label for="name" class="col-sm-2 fw-bold col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name"  value="{{ old('name') }}">
                    @error('name') <x-alert type="error" message="{{ $message }}"/>
                    @enderror
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputPassword" class="fw-bold col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="image">
                    @error('image') <x-alert type="error" message="{{ $message }}"/> @enderror
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputPassword" class="fw-bold col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="price">
                    @error('price') <x-alert type="error" message="{{ $message }}"/> @enderror
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputPassword" class="fw-bold col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="date">
                    @error('date') <x-alert type="error" message="{{ $message }}"/> @enderror
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputPassword" class="fw-bold col-sm-2 col-form-label">Time</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="time">
                    @error('time') <x-alert type="error" message="{{ $message }}"/> @enderror
                  </div>
                </div>
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('jquery')
  
  $('.editbtn').on('click',function(){
    $('#editmodal').modal('show');
    $tr = $(this).closest('tr');
    var imag_td = $(this).closest('td');
    let id = $(this).attr('id');
    let image = $(imag_td).data("image");;
    console.log(image);
    var data = $tr.children("td").map(function () {
      return $(this).text();
    }).get();
    console.log(data)
    let check =`<input type="hidden" name="id" value="${id}">`
    check +=`<x-input name="name" label="Cinema Name" inputvalue="${data[0]}" />`
    check +=`<x-input name="image" label="Image Name" datatype="file" />`
    check +=`<x-input name="date" label="Date" inputvalue="${data[2]}" />`
    check +=`<x-input name="time" label="Time" inputvalue="${data[3]}" />`
    check +=`<button class="btn btn-primary" type="submit" name="submit">update</button>`
    $("#editdata").html(check);
  })
@endsection


