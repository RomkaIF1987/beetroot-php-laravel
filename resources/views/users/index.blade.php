@extends('layouts.app')

@section('title','Laravel - Users')

@section('content')
    <h2>USERS</h2>

    <p>
        <a href="{{route('users.create')}}" class="btn btn-success">Create new User</a>
    </p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col" colspan="2">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{route('users.edit', ['id' => $user->id])}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{route('users.delete', ['id' => $user->id])}}" method="POST">
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