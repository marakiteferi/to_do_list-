@extends('layout')

@section('title', 'Edit Task')

@section('content')
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $task->title }}" required>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $task->description }}</textarea>
        
        <label for="priority">Priority:</label>
        <select id="priority" name="priority">
            <option value="low" {{ $task->priority == 'low' ? 'selected' : '' }}>Low</option>
            <option value="medium" {{ $task->priority == 'medium' ? 'selected' : '' }}>Medium</option>
            <option value="high" {{ $task->priority == 'high' ? 'selected' : '' }}>High</option>
        </select>
        
        <label for="category_id">Category:</label>
        <select id="category_id" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $task->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
        
        <label for="status_id">Status:</label>
        <select id="status_id" name="status_id">
            @foreach($statuses as $status)
                <option value="{{ $status->id }}" {{ $task->status_id == $status->id ? 'selected' : '' }}>{{ $status->status_name }}</option>
            @endforeach
        </select>
        
        <button type="submit">Update Task</button>
    </form>
@endsection
