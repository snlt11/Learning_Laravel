@extends('layouts.master')

@section('title',"All Posts")

@section('content')
<br><br>
    <a href="/posts/create" class="btn btn-primary">Create</a><br><br>
    @foreach ($posts as $post)

        <p>{{$post->title}}</p>
        <p>{{$post->content}}</p>
        <p>{{$post->likes}}</p>
        <a href="{{url("/posts/".$post->id."/edit")}}" class="btn btn-warning">Edit</a><br>
        <a href="{{url("/posts/".$post->id)}}" class="btn btn-info">Detail</a><br>
        <form action="{{url('/posts/'.$post->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <br><hr>
    @endforeach

@endsection
