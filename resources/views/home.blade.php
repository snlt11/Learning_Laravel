@extends('layouts.master')

@section('title','Home page')

@section('content')

    <h1>Home Page</h1>

    {{-- <a href="{{URL::previous()}}">Back</a><br>
    <a href="{{url()->previous()}}">Back</a>
    <p>{{url()->full()}}</p>
    <p>{{url()->current()}}</p>

    <a href="{{url('/hey',[1,2])}}">Test1</a><br>
    <a href="{{url('/hey',['id'=>1,'uid'=>2])}}">Test2</a> --}}

@endsection
