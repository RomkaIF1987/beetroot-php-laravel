@extends('layouts.app')

@section('content')
    <h2>Edit user - {{$user->name}}</h2>
    <form action="{{route('users.update',['id' => $user->id])}}" method="Post">
        @csrf

        <input type="text" name="name" placeholder="Name" value="{{$user->name}}">

        <input type="submit" value="Edit user">
    </form>
@endsection
