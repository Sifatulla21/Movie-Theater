<div class="mb-3">
    <label for="{{ $label }}" class="fw-bold col-form-label">{{ $label }}</label>
    <div class="">
      <input type="{{ isset($datatype) ? $datatype : 'text' }}" 
        class="form-control" 
        name="{{ $name }}"  
        @if ($readonly) {{ "readonly disabled" }} @endif
        value="{{ isset($inputvalue) ? $inputvalue :old($name) }}"
        placeholder="{{isset($place) ? $place : ''}}"
      >
      <span class="text-danger">
        @if($errors->has($name)) {{ $errors->first($name) }}@endif
      </span>
    </div>
</div>