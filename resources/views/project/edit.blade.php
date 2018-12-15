@extends('layouts.app')

@section('title')
    Edit project  - {{$project->title}}
@endsection
@section('content')
    <h2>Edit project - {{$project->title}}</h2>
    <form action="{{route('project.update',['project' => $project->id])}}" method="Post">
        @csrf
        @method('Patch')
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="title" placeholder="Enter new title"
                   value="{{$project->title}}"
                   aria-label="Recipient's username" aria-describedby="button-addon2">
            <input type="text" class="form-control" name="description" placeholder="Enter new description"
                   value="{{$project->description}}"
                   aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <input class="btn btn-outline-secondary" type="submit" id="button-addon2">
            </div>
        </div>
    </form>
@endsection
