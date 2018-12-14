@extends('layouts.app')

@section('title','Create User')

@section('content')
    <h2>CREATE USER</h2>
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Your name</label>
            <input type="text" class="form-control" name="name" id="exampleInputName" aria-describedby="name"
                   placeholder="Enter your name">
            <small id="name" class="form-text text-muted">Tell us your name.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                   placeholder="Password">
        </div>

        <input type="submit" class="btn btn-secondary btn-lg" value="Create new user">
    </form>
@endsection



