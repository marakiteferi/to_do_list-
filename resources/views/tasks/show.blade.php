@extends('layout')

@section('title', 'View Task')

@section('content')
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <p>Priority: {{ $task->priority }}</p>
    <p>Category: {{ $task->category->name }}</p>
    <p>Status: {{ $task->status->status_name }}</p>
    <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
