@extends('layout')

@section('content')
    <h1>Projects</h1>
    <ul>
        @foreach ($projects as $item)
            <li><a href="/projects/{{$item->id}}/edit">{{ $item->title }} </a></li>
        @endforeach
    </ul>

    <a name="" id="" class="btn btn-primary" href="/projects/create" role="button">Create Project</a>
@endsection