@extends('layouts.app')

@section('title','Create User')

@section('content')
    <h2>CREATE PROJECT</h2>
    <form action="{{route('project.store')}}" method="POST">
        @include('project.partials.form')

        <input type="submit" class="btn btn-success btn-lg" value="Create new project">
    </form>
@endsection
