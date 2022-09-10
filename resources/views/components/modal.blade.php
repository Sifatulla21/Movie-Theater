
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary editbtn" id="{{ $id }}">
    Edit</button>
    @php
        $inspect = explode(",",$route);
        $new = [];
        if(count($inspect) > 1){
            $route = $inspect[0];
            $ins = explode("=>",$inspect[1]);
            $new= array($ins[0] => $ins[1]);
        }
        
        //echo route($inspect[0],$new);
        
    @endphp
  <!-- Modal -->
<div class="modal fade" id="{{ $type }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-success" id="staticBackdropLabel">{{ $title }}</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if($type === 'editmodal') 
                    <form action="{{ route($inspect[0],$new) }}"  enctype="multipart/form-data" method="post">
                        @if (!empty($new))
                            {{ method_field('PUT') }}
                        @endif
                        @csrf
                        <div id="editdata"></div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>