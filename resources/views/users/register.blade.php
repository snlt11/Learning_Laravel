@extends('layouts.master')

@section('title','Register User')

@section('content')
    <div class="col-md-6 offset-md-3 my-5">
        <h1 class="text-info text-center">Register User</h1>
        <form method="post">
            {{-- @if ($errors->any)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{$error}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @else
                <h2>No Error</h2>
            @endif --}}

            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Enter Your Name</label>
              <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" id="name" name="name" value="{{old('name')}}">
              @if ($errors->has('name'))
                    <div id="nameHelp" class="form-text text-danger">{{$errors->first('name')}}</div>
              @endif
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control @if($errors->has('email')) is-invalid @endif" id="email" name="email" value="{{old('email')}}">
              @if ($errors->has('email'))
                    <div id="emailHelp" class="form-text text-danger">{{$errors->first('email')}}</div>
              @endif
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Enter Your Phone Number</label>
                <input type="number" class="form-control @if($errors->has('phone')) is-invalid @endif" id="phone" name="phone" maxlength="12" value="{{old('phone')}}">
                @if ($errors->has('phone'))
                    <div id="phoneHelp" class="form-text text-danger">{{$errors->first('phone')}}</div>
                @endif
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @if($errors->has('password')) is-invalid @endif" id="password" name="password">
                    @if ($errors->has('password'))
                        <div id="passwordHelp" class="form-text text-danger">{!!$errors->first('password')!!}</div>
                    @endif
                </div>
                <div class="col-md-6 mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control @if($errors->has('password_confirmation')) is-invalid @endif" id="password_confirmation" name="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                        <div id="password_confirmation_Help" class="form-text text-danger">{{$errors->first('password_confirmation')}}</div>
                    @endif
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm float-end">Register</button>
            <button type="reset" class="btn btn-outline-warning btn-sm me-2 float-end">Cancle</button>
          </form>
    </div>
@endsection
