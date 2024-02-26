@extends('layouts.master')

@section('title','Welcome to blade')

@section('content')

    <h1>Welcome Page</h1>
    @foreach ($posts as $post)
        <p>{{$post->name}}</p>
    @endforeach

@endsection





