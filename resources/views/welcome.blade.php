@extends('layouts.master')

@section('title','Welcome to blade')

@section('content')
    <h1>Welcome Page</h1>


    <a href="{{URL::temporarySignedRoute('verify',now()->addSeconds(3),['uid'=>2])}}">Verify</a>

    <a href="/posts">Default</a>
    <a href="{{url('posts')}}">URL</a>
    <a href="{{route('posts')}}">Route</a>

    @php
        $pid = 1;
        $name = 'mgmg';
    @endphp

    <h1>Single Post</h1>
    <a href="/post/$pid">single post</a>
    <a href="{{url('/post/'.$pid)}}">PID post</a>
    <a href="{{route('single.post',$pid)}}">Name route</a>

    <h1>nested Post</h1>
    <a href="/post/$pid/edit">nested post</a>
    <a href="{{url('/post/'.$pid.'/edit')}}">nested post</a>
    <a href="{{route('post.edit',$pid)}}">nested name route</a>


    <h1>Double path Post</h1>
    <a href="/post/1/mgmg/edit">Double path post</a>
    <a href="{{url('/post/'.$pid.'/'.$name.'/edit')}}">Double path URL post</a>
    <a href="{{route('post.edit2',[$pid,$name,'test1','test2'])}}">Double path Name route</a>

    <h1>Double nested Post</h1>
    <a href="/post/1/edit/mgmg">Double nested post</a>
    <a href="{{url('/post/'.$pid.'/edit/'.$name)}}">Double nested URL post</a>
    <a href="{{route('post.edit3',[$pid,$name,'test1','test2'])}}">Double nested Name route</a>

@endsection


