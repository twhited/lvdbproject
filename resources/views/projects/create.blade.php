@extends('layout')

@section('content')
    <h1>Create a new Project</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Project Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Project Title">
            <small id="helpId" class="form-text text-muted">The title of the project</small>
        </div>

        <div class="form-group">
          <label for="description">Project Description</label>
          <textarea class="form-control" name="description" id="description" rows="3" placeholder="Project Description"></textarea>
        </div>

        <div><button type="submit" class="btn btn-primary">Create Project</button></div>
    </form>
@endsection