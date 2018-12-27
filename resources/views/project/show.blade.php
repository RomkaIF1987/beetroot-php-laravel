@extends('layouts.app')

@section('title')
    Show project  - {{$project->title}}
@endsection
@section('content')
    <h2>Project - {{$project->title}}</h2>
    <h4> This project belongs to the user {{$project->user->name}}</h4>
    @csrf

    <div class="input-group mb-3">
        {{$project->description}}
    </div>

    <div class="box">
        @foreach($project->tasks as $task)
            <form class="form-group" action="/completed-task/{{$task->id}}" method="POST">
                @csrf
                @if($task->completed)
                    @method('DELETE')
                @endif

                <div class="custom-control custom-checkbox">
                    <input
                            type="checkbox"
                            class="custom-control-input"
                            id="customCheck1{{$task->id}}"
                            onChange="this.form.submit()"
                            name="completed"
                            @if($task->completed) checked @endif
                            required
                    >
                    <label class="custom-control-label {{$task->completed ? 'is-completed' : ''}}"
                           for="customCheck1{{$task->id}}">{{$task->description}}</label>
                </div>
            </form>

        @endforeach

    </div>

    <form class="box" action="{{route('tasks.store', ['project' => $project->id])}}" method="POST">
        @csrf
        <div class="was-validated">
            <label class="label" for="description"><h4>ADD new Task</h4></label>
            <div class="control">
                <input type="text" class="form-control" name="description" placeholder="Task name"
                       aria-describedby="title" {{old('description')}} required>
            </div>
            @include('project.partials.errors')
            <div style="padding-top: 10px">
                <button class="btn btn-success" type="submit">Add new Task</button>
            </div>
        </div>
    </form>

@endsection
