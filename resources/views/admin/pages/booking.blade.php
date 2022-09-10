@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">Cinema Booking List</h2>
    
        <div class="w-50 mx-auto">
            <table class="table table-responsive table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Seat No</th>
                    <th scope="col">Seat Status</th>
                    <th scope="col">Cinema Status</th>
                  </tr>
                </thead>
                <tbody>
                  @php $numbers = [10,2,5,4,7,8,11,14,15,17,16,18,20,1,6,3,12,19,9,12]; @endphp
                  @foreach ($bookings as $item)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $numbers[$loop->index] }}</td>
                    <td class="{{ $item->type == 0 ? 'text-danger' : 'text-success' }}">{{ $item->type == 0 ? 'Unbooked' : 'Booked' }}</td>
                    <td class="text-primary">Running</td>
                  </tr>   
                  @endforeach
                </tbody>
            </table>
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


