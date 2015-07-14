@extends('layouts.master')

@section('content')

    <h1>Welcome Home</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consecterur adipisicing elit.</p>
    <hr>

    <a href="{{ route('tasks.index') }}" class="btn btn-info">View Tasks</a>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add New Task</a>

@stop