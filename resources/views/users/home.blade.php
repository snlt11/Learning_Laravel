@extends('layouts.master')

@section('title','Home page')

@section('content')
    <h1>Home Page</h1>
    @if (Session::get('success'))
        {{Session::get('success')}}
    @endif
    
@endsection
