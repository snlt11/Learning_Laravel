@extends('layouts.master')

@section('title',"All Tags")

@section('content')
<br><br><br>
<a href="/tags/create">Create</a><br>
    @if(count($tags) > 0)
        @foreach ($tags as $tag)
            <p>
                {{$tag->id}}.
                {{$tag->name }}
                <a href="{{url("/tags/".$tag->id."/edit")}}">Edit</a>
                <a href="{{url("/tags/".$tag->id."/delete")}}">Delete</a>
                <a href="{{url("/tags/".$tag->id."/show")}}">Detail</a>
            </p>

        @endforeach
    @else
        <p>Nothing To show</p>
    @endif
@endsection
