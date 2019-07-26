@extends('layout')

@section('content')
    <h1>Projects</h1>
    <ul>
        @foreach ($projects as $item)
            <li><a href="/projects/{{$item->id}}/edit">{{ $item->title }}</a> - <a href="/projects/{{$item->id}}">View</a></li>
        @endforeach
    </ul>

    <a class="btn btn-primary" href="/projects/create" role="button">Create Project</a>
@endsection