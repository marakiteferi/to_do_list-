@extends('layout')

@section('title', 'Create Task')

@section('content')
    <h1>Create Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        
        <label for="priority">Priority:</label>
        <select id="priority" name="priority">
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
        </select>
        
        <label for="category_id">Category:</label>
        <select id="category_id" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        
        <label for="status_id">Status:</label>
        <select id="status_id" name="status_id">
            @foreach($statuses as $status)
                <option value="{{ $status->id }}">{{ $status->status_name }}</option>
            @endforeach
        </select>
        
        <button type="submit">Create Task</button>
    </form>
@endsection
