@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">Account List</h2>
    <div class="row">
      @include('admin.elements._viewaccount')
        @include('admin.elements._addaccount')
    </div>
</div>
@endsection

@section('jquery')
  
  $('.editbtn').on('click',function(){
    $('#editmodal').modal('show');
    $tr = $(this).closest('tr');
    let id = $(this).attr('id');
    console.log(id);
    var data = $tr.children("td").map(function () {
      return $(this).text();
    }).get();
    
    let check =`<input type="text" name="id" value="${id}">`
    check +=`<x-input name="name" label="Your Name" inputvalue="${data[0]}" />`
    check +=`<x-input name="bank" label="Your bank name" inputvalue="${data[1]}" />`
    check +=`<x-input name="ac_no" label="Your Account" inputvalue="${data[3]}" />`
    check +=`<x-input name="r_no" label="Your route no" inputvalue="${data[4]}" />`
    check +=`<x-input name="branch" label="Your branch" inputvalue="${data[2]}" />`
    check +=`<button class="btn btn-primary" type="submit" name="submit">update</button>`
    $("#editdata").html(check);
  })
@endsection

