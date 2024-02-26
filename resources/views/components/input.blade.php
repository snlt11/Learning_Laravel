<div class="mb-3 col-md-6">
    <label for="{{$name}}" class="form-label">Enter Your {{$name}}</label>
    <input type="{{$type}}" class="form-control @if($errors->has('$name')) is-invalid @endif" id="{{{$name}}}" name="{{$name}}" value="{{old('$name')}}">
    @error($name)
        <div id="{{$name}}Help" class="form-text text-danger">{{$message}}</div>
    @enderror
  </div>
