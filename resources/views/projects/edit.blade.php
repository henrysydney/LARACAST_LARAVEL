@extends('layout')

@section('content')
    <h1 class="title">Edit Projects</h1>

<form method="POST" action="/projects/{{ $project->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="field">
            <label class="label" for="title">Title</label>
        </div>       

        <div class="control">
        <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
        </div>

        <div>
            <label for="description" class="label">Description</label>

            <div>
            <textarea name="description" class="textarea">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>

            </div>
        </div>

    </form>
    <form action="DELETE" action="/projects/{{ $project->id }}">
        <div>
                <button type="submit" class="button is-link">Delete Project</button>
        </div>
    </form>
@endsection