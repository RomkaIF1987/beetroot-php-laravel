@extends('layouts.app')

@section('title','Project')

@section('content')
    <h2>PROJECT</h2>

    @foreach($projects as $project)
        {{$project->title}}
    @endforeach

@endsection