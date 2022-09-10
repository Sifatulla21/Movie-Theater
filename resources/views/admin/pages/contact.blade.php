@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">Contact</h2>
    <div class="row">
        <div class="col-md-12">
            <x-table 
            :th="['Name', 'Details']" 
            >
            @foreach ($contacts as $item)
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->title }}</td>
                <td>{{ $item->description }}</td>
                <td>
                    <x-modal 
                    type="editmodal" 
                    route="accounts.update,account=>{{ $item->id }}"
                    title="Edit Data" id="{{ $item->id }}" />
                </td>
                </tr>   
            @endforeach
            </x-table>
        </div>
    </div>
</div>
@endsection
@section('page_scripts')
    $("#addmore").click(function(){
        var lastId = $(".incd:last-child").attr("id");
        console.log(lastId);
        $("#included").append(`<div class='d-flex justify-content-between w-75 mx-auto mb-3 incd' id='${parseInt(lastId) + 1}'><input type='text' class='form-control' name='description[]' required><button type='button' class='btn btn-sm btn-danger'>x</button></div>`);
    });
    $(document).on('click','.incd',function(){
        var id = $(this).closest("div").attr("id")
        console.log(id)
        $(`#${id}`).remove();
    });
@endsection

