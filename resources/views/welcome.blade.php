@extends('layouts.master')

@section('title','Welcome to blade')

@section('content')

    <h1>Welcome Page</h1>

    @foreach ($users as $user)
        <p>{{$user->profile->address}}</p>

    @endforeach


@endsection





