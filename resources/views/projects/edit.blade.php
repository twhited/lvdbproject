@extends('layout')

@section('content')
    <h1>Edit Project</h1>
    <form method="POST" action="/projects/{{ $project->id }}">
        @method('PATCH')
        @csrf
       
        <div class="form-group">
            <label for="title">Project Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" value="{{ $project->title }}" placeholder="Project Title">
            <small id="helpId" class="form-text text-muted">The title of the project</small>
        </div>

        <div class="form-group">
            <label for="description">Project Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Project Description">{{ $project->description }}</textarea>
        </div>

        <div><button type="submit" class="btn btn-primary">Update Project</button></div>
    </form>

    <hr>
    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf
       
        <div><button type="submit" class="btn btn-primary">Delete Project</button></div>
    </form>
@endsection