@extends('layouts.master')

@section('title',"Create Post")

@section('content')
    <div class="col-md-6 offset-md-3 my-5">
        <form action="/posts" method="post">
            @csrf
            <input type="text" name="title" id="title" placeholder="Post Title"><br><br>
            <textarea name="content" id="content" cols="30" rows="10" placeholder="Write Content Here"></textarea><br><br>
            <input type="number" name="likes" id="likes" placeholder="Like Count"><br><br>
            <button type="submit" class="btn btn-info">Create</button>
        </form>
    </div>

@endsection
