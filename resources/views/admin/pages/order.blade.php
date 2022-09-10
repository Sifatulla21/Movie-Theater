@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">Order List</h2>
    <div class="row">
        <div class="col-md-10 mx auto">
            <table class="table table-responsive">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Transaction ID</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Order Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $order)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->transaction_id }}</td>
                    <td>{{ $order->amount }} TK</td>
                    <td>{{ $order->status }}</td>
                  </tr>   
                  @endforeach
                </tbody>
            </table>
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
    let check =`<input type="text" name="id" value="${id}">`
    check +=`<x-input name="name" label="Cinema Name" inputvalue="${data[0]}" />`
    check +=`<x-input name="image" label="Image Name" datatype="file" />`
    check +=`<x-input name="date" label="Date" inputvalue="${data[2]}" />`
    check +=`<x-input name="time" label="Time" inputvalue="${data[3]}" />`
    check +=`<button class="btn btn-primary" type="submit" name="submit">update</button>`
    $("#editdata").html(check);
  })
@endsection


