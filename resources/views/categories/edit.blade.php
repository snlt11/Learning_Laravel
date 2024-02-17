@extends('layouts.master')
@section('title','Edit Category')

@section('content')
    <br><br>
    <form action="{{url("/categories/".$cat->id)}}" method="post">
        @csrf
        @method('patch')
        <input type="text" name="name" id="name" value="{{$cat->name}}"><br><br>
        <input type="number" name="price" id="price" value="{{$cat->price}}"><br><br>
        <button type="submit">Update</button>
        <a href="{{URL::previous()}}" class="btn btn-primary">Cancle</a>

    </form>


@endsection
