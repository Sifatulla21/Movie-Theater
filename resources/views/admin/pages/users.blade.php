@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">Account List</h2>
    <div class="row">
      @include('admin.elements._viewuser')
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
    
    let check =`<input type="hidden" name="id" value="${id}">`
    check +=`<x-input readonly="true" name="name" label="User Name" inputvalue="${data[0]}" />`
    check +=`<x-input readonly="true" name="email" label="Email name" inputvalue="${data[1]}" />`
    check +=`<x-input readonly="true" name="phone" label="Phone number" inputvalue="${data[3]}" />`
    check +=`<x-formselect name="role"><option value="admin">Admin</option><option value="subscriber">Subscriber</option><option value="editor">Editor</option></x-formselect>`
    check +=`<button class="btn btn-primary" type="submit" name="submit">update</button>`
    $("#editdata").html(check);
  })
@endsection

