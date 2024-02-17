@extends('layouts.master')

@section('title','Welcome to blade')

@section('content')
    <h1>{{$title}}</h1>
    <button class="btn btn-primary" onclick="show()">Click</button><br><br>

    <a href="/tags" class="btn btn-primary">To Tags</a>
    <a href="/categories" class="btn btn-info">To Category</a>


    {{-- @php
        $con = "success";
    @endphp
    <x-helper.tester sender="testcall" :title="$title" :con="$con" data="this is data" class="alert-info">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, blanditiis. Consequuntur delectus, odio earum rem odit qui doloribus ratione itaque omnis architecto saepe nesciunt harum dolor enim cum laudantium similique.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, nam libero maiores ab, veritatis quibusdam maxime esse error minima quod inventore. Totam perspiciatis aut porro, laboriosam voluptatibus modi explicabo fugit.</p>
    </x-helper.tester> --}}

    {{-- <x-drink.water/> --}}
    {{-- <x-drink.show-it/> --}}
    {{-- <x-water/> --}}
    {{-- <x-showit/> --}}
@endsection

@section('scripts')
    let show = () => alert('123');
@endsection

