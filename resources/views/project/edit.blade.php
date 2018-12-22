@extends('layouts.app')

@section('title')
    Edit project  - {{$project->title}}
@endsection
@section('content')
    <h2>Edit project - {{$project->title}}</h2>
    <form action="{{route('project.update',['project' => $project->id])}}" method="Post">
        @method('Patch')
        @include('project.partials.form')

        <input type="submit" class="btn btn-secondary btn-lg" value="Edit project">
        </div>
    </form>
@endsection


