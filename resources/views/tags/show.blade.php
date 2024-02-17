@extends('layouts.master')

@section('title',"Show all Tags")
@section('content')
    <br>
    <p>

        {{$tag->id}} . {{$tag->name}} . {{$tag->created_at}} . {{$tag->updated_at}}
    </p>

@endsection
