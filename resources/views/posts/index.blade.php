@extends('layouts.master')

@section('title',"All Posts")

@section('content')
<br><br>
    <a href="/posts/create" class="btn btn-primary">Create</a>
    @foreach ($posts as $post)

        <p>{{$post->title}}</p>
        <p>{{$post->content}}</p>
        <p>{{$post->likes}}</p>



    @endforeach

@endsection
