@extends('layouts.master')
@section('title','Single Category')

@section('content')
<br><br>
    <a href="{{URL::previous()}}" class="btn btn-primary">Go Back</a>
    <p>{{$cat->id}}</p>
    <p>{{$cat->name}}</p>
    <p>{{$cat->price}}</p>
    <p>{{$cat->created_at}}</p>
    <p>{{$cat->updated_at}}</p>
@endsection
