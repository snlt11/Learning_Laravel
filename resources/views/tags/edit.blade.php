@extends('layouts.master')
@section('title','Edit Tags')

@section('content')
    <br><br>
    <form method="post">
        @csrf
        <input type="text" name="name" id="name" value="{{$tag->name}}">
        <button type="submit" value="subject">Update</button>

    </form>
@endsection
