@extends('user.layouts.master')
@section('page_style_plugins')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
@endsection
@section('main_content')
<section class="container-fluid h-25">
  <img class="img-fluid" src="{{ asset($cinema->image) }}" alt="ii" style="width: 100%;height: 396px;"/>
</section>
<div class="container-fluid m-3 pb-5" ><!--header_top-->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="w-75 mx-auto">
            <div class="d-flex align-items-center">
              <div class="border rounded me-2" style="width:30px;height:30px;background: #ccc;"></div>Avalible
              <div class="border rounded ms-2 me-2" style="width:30px;height:30px;background: yellow;"></div>Booked
              <div class="border rounded ms-2 me-2" style="width:30px;height:30px;background: red;"></div>Your Selection
            </div>
            <hr>
            <div class="row">
            @php $i = 0; @endphp
            @foreach ($bookings as $item)
                @php 
                    $space = "";
                    $i++;
                    if ($i == 3) {
                        $space = 'me-3';
                        $i = 0;
                    } else{ $space = "";}
                    $backgound = "";
                    if ($item->user_id == Auth::user()->id) {
                        $backgound = "red";
                    } elseif ($item->type == 3) {
                        $backgound = "yellow";
                    }else {
                        $backgound = "#ccc";
                    }
                    
                @endphp
                <div class="booksit col-md-1 mb-3 {{$space}}" id="{{ $item->id }}">
                    <div class="border border border-2" style="width: 40px;height: 50px;background: {{$backgound}};border-radius: 30px 30px 0 0;"></div>
                </div>  
            @endforeach
            </div>
            <button class="your-button-class" id="sslczPayBtn"
              token="4234353453453453453443"
              postdata=""
              order="If you already have the transaction generated for current order"
              endpoint="{{ url('/pay-via-ajax') }}"> Pay Now
            </button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="border border-2 p-2 mb-3">
            <div class="w-50 mx-auto">
              <h2 class="text-center text-warning">Details</h2>
              <h6 class="d-flex justify-content-between"><span class="me-3">Movie Name : </span><span>{{ $cinema->name }}</span></h6>
              <h6 class="d-flex justify-content-between"><span class="me-3">Date       : </span><span>{{ $cinema->date }}</span></h6>
              <h6 class="d-flex justify-content-between"><span class="me-3">Time       : </span><span>{{ $cinema->time }}</span></h6>
              <h6 class="d-flex justify-content-between"><span class="me-3">Price       : </span><span><span id="amount">{{ $cinema->price }}</span>Tk</span></h6>
              <br>
              <h6 class="d-flex justify-content-between"><span class="me-3">Customer Name : </span><span id="cus_name">{{Auth::user()->name}}</span></h6>
              <h6 class="d-flex justify-content-between"><span class="me-3">Customer Email : </span><span id="cus_email">{{Auth::user()->email}}</span></h6>
              <h6 class="d-flex justify-content-between"><span class="me-3">Customer Phone : </span><span id="cus_phone">01755234231</span></h6>
              <h6 class="d-flex justify-content-between"><span class="me-3">Seat No       : </span><span id="sitnum" class="fw-bold text-danger"></span></h6>
            </div>
          </div>
        </div>
      </div>
      
    </div>
</div>
@endsection

@section('jquery')
  {{-- start seatt booking --}}
  var id = $('#sitnum').text();
  var count = 0;
  var amount = parseInt($('#amount').text());
  $(document).on('click','.booksit',function(){
    id += $(this).attr('id')+',';
    if(count > 0){
      amount += amount;
    }
    count +=1
    $('#sitnum').text(id);
    $('#amount').text(amount)
    obj.cus_addr1 = id;
    obj.amount = amount;
    $('#' +$(this).attr('id')+' div').addClass('bg-danger');
    $('#sslczPayBtn').removeClass('d-none');
  })
  
  if( !$('#sitnum').text() ) {
    $('#sslczPayBtn').addClass('d-none');
  }
    var obj = {};
    obj.cus_name = $('#cus_name').text();
    obj.cus_phone = $('#cus_phone').text();
    obj.cus_email = $('#cus_email').text();
    {{-- obj.cus_addr1 = $('#sitnum').text(); --}}
    
    
    
    $('#sslczPayBtn').prop('postdata', obj);
    
@endsection