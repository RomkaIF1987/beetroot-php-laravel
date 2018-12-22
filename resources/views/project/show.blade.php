@extends('layouts.app')

@section('title')
    Show project  - {{$project->title}}
@endsection
@section('content')
    <h2>Project - {{$project->title}}</h2>
    @csrf

    <div class="input-group mb-3">
        <input type="text" class="form-control" name="title" placeholder="Enter new name"
               value="{{$project->description}}"
               aria-label="Recipient's username" aria-describedby="button-addon2">
    </div>

    <div>
        @foreach($project->tasks as $task)
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="taskCheckbox">
                <label class="form-check-label" for="exampleCheck1">{{$task->description}}</label>
            </div>
        @endforeach

    </div>
@endsection
