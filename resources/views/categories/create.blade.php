@extends('layouts.master')
@section('title','Create Category')

@section('content')
    <br><br>
    <form action="/categories" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Name"><br><br>
        <input type="number" name="price" id="price" placeholder="Number"><br><br>
        <button type="submit">Create</button>
        <a href="{{URL::previous()}}" class="btn btn-info">Cancle</a>

    </form>


@endsection
