@extends('layouts.master')

@section('title','Welcome to blade')

@section('content')
    <h1>Content</h1>
    <button class="btn btn-primary" onclick="show()">Click</button>
    @isset($users[0])
        <p>User Exit</p>
    @endisset

    @empty($users)
        <p>
            No Users
        </p>
    @endempty

@endsection

@section('scripts')
    let show = () => alert('123');
@endsection

