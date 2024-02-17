@extends('layouts.master')
@section('title','Create Tags')

@section('content')
    <br><br>
    <form action="/tags" method="post">
        @csrf
        <input type="text" name="name" id="name">
        <button type="submit" value="subject">Create</button>

    </form>
@endsection
