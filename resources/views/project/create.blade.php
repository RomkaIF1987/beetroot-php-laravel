@extends('layouts.app')

@section('title','Create User')

@section('content')
    <h2>CREATE PROJECT</h2>
    <form action="{{route('project.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputName">New name for your Project</label>
            <input type="text" class="form-control" name="title" id="exampleInputName" aria-describedby="title"
                   placeholder="Enter your project name">
            <small id="name" class="form-text text-muted">Come up with a project name</small>
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" placeholder="Description"
                   aria-describedby="title">
            <small id="emailHelp" class="form-text text-muted">Write a description of your project</small>
        </div>

        <input type="submit" class="btn btn-secondary btn-lg" value="Create new project">
    </form>
@endsection
