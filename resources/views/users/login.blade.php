@extends('layouts.master')

@section('title',$title)

@section('content')
    <div class="col-md-6 offset-md-3 my-5">
        <h1 class="text-info text-center">Login User</h1>
        <form method="post">

            @if(Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('success')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @csrf
            <div class="mb-3">
                <label for="phone" class="form-label">Enter Your Phone Number</label>
                <input type="number" class="form-control @if($errors->has('phone')) is-invalid @endif" id="phone" name="phone" maxlength="12" value="{{old('phone')}}">
                @if ($errors->has('phone'))
                    <div id="phoneHelp" class="form-text text-danger">{{$errors->first('phone')}}</div>
                @endif
            </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @if($errors->has('password')) is-invalid @endif" id="password" name="password">
                    @if ($errors->has('password'))
                        <div id="passwordHelp" class="form-text text-danger">{!!$errors->first('password')!!}</div>
                    @endif
                </div>
            <button type="submit" class="btn btn-primary btn-sm float-end">Login</button>
            <button type="reset" class="btn btn-outline-warning btn-sm me-2 float-end">Cancle</button>
          </form>
    </div>
@endsection
