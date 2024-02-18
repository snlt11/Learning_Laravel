@extends('layouts.master')

@section('title',"Edit Post")

@section('content')
    <div class="col-md-6 offset-md-3 my-5">
        <form action="{{url("/posts/".$post->id)}}" method="post">
            @csrf
            @method('patch')
            <input type="text" name="title" id="title" placeholder="Post Title" value="{{$post->title}}"><br><br>
            <textarea name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea><br><br>
            <input type="number" name="likes" id="likes" placeholder="Like Count" value="{{$post->likes}}"><br><br>
            <button type="submit" class="btn btn-info">Create</button>
        </form>
    </div>

@endsection
