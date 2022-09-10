@if ($type == "error")
<span class="text-danger alert alert-danger">
    {{ $message }}
</span>
@elseif($type == "success")
<span class="text-success alert alert-success">
    {{ $message }}
</span>
@endif
