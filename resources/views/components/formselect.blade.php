<div class="mb-3">
    <label for="{{ $name }}" class="fw-bold col-form-label">{{ $name }}</label>
    <div class="">
      <select class="form-select" name="{{ $name }}">
        <option selected>Select Option</option>
        {{ $slot }}
      </select>
      <span class="text-danger">
        @if($errors->has($name)) {{ $errors->first($name) }}@endif
      </span>
    </div>
</div>