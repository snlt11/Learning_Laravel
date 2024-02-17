@extends('layouts.master')
@section('title','All Categories')

@section('content')
<br><br>
<a href="/categories/create" class="btn btn-info">To Create</a>
<br><br>
    @if (count($cats)>0)
        @foreach ($cats as $cat)
            <p>
                {{$cat->name}}.
                {{$cat->price}}
            </p>
            <a  class="btn btn-primary" href="{{url("/categories/".$cat->id)}}">Detail</a><br><br>
            <a href="{{url("/categories/".$cat->id."/edit")}}" class="btn btn-warning">Edit</a><br><br>
            <form action="{{url("/categories/".$cat->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <hr>


        @endforeach
    @else
        <p>Nothing To show</p>
    @endif


@endsection
