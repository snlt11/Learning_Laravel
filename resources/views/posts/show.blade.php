@extends('layouts.master')

@section('title',"Show Post")

@section('content')
    <p>{{$post->title}}</p>
    <p>{{$post->content}}</p>
    <p>{{$post->likes}}</p>


@endsection
