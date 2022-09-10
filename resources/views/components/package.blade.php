<div class="col-md-4 mb-3">
    <div class="card text-center">
      <div class="card-header">
        <h4>{{ $title }}</h4>
        <h2 class="bg-warning p-2 b">{{ $mb }} Mbps</h2>
        <br>
        <h1><span class="text-danger">TK {{ $tk }} </span>/mo</h1>
      </div>
      <div class="card-body text-left">
        <h5 class="card-title">WHAT'S INCLUDED</h5>
        @php
            $des_array = explode("||",$des);
        @endphp
        <div class="text-start w-75 mx-auto">
          @foreach ($des_array as $item)
            <p class="card-text text-right"><span class="text-success h4"><i class="fa fa-check" aria-hidden="true"></i></span>{{ $item }}</p>
          @endforeach
        </div>
      </div>
      <div class="card-footer text-muted">
        <a href="#" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
</div>