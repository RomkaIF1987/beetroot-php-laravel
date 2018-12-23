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
            <form action="{{route('tasks.complete', ['task'=>$task->id])}}" method="POST">
                @method('PATCH')
                @csrf

                <div class="custom-control custom-checkbox">
                    <input
                            type="checkbox"
                            class="custom-control-input"
                            id="customCheck1{{$task->id}}"
                            onChange="this.form.submit()"
                            name="completed"
                            @if($task->completed) checked @endif
                    >
                    <label class="custom-control-label" for="customCheck1{{$task->id}}">{{$task->description}}</label>
                </div>

            </form>

        @endforeach

    </div>
@endsection
