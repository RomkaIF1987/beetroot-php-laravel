@extends('layouts.app')

@section('title','Project')

@section('content')
    <h2>PROJECT</h2>
    <p>
        <a href="{{route('project.create')}}" class="btn btn-success">Create new Project</a>
    </p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>

                    <a href="{{route('project.show', ['id' => $project->id])}}" class="btn btn-info">Show</a>
                    <a href="{{route('project.edit', ['id' => $project->id])}}" class="btn btn-primary">Edit</a>
                    <form action="{{route('project.destroy', ['project' => $project])}}" method="POST"
                          style="display: inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
