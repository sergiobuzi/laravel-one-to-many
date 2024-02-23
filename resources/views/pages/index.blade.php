@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>cose</h1>
    <ul>
        @foreach ($projects as $project)

            <li>
                {{$project -> name}}
                <span>tipo: {{$project -> type -> category}}</span>
            </li>
            
        @endforeach
    </ul>
@endsection
