@extends('layouts.app')

@section('title')
    Edit user  - {{$user->id}}
@endsection
@section('content')
    <h2>Edit user - {{$user->name}}</h2>
    <form action="{{route('users.update',['id' => $user->id])}}" method="Post">
        @csrf

        <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" placeholder="Enter new name" value="{{$user->name}}"
                   aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <input class="btn btn-outline-secondary" type="submit" id="button-addon2">
            </div>
        </div>
    </form>
@endsection
