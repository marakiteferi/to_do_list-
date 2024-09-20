@extends('layout')

@section('title', 'Search Results')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Search Results for "<em>{{ $query }}</em>"</h2>

    @if ($tasks->isEmpty() && $categories->isEmpty())
        <div class="alert alert-info" role="alert">
            No results found.
        </div>
    @else
        @if (!$tasks->isEmpty())
            <h3 class="mb-3">Tasks</h3>
            <ul class="list-group mb-4">
                @foreach ($tasks as $task)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route('tasks.show', $task->id) }}" class="text-decoration-none">{{ $task->title }}</a>
                    </li>
                @endforeach
            </ul>
        @endif

        @if (!$categories->isEmpty())
            <h3 class="mb-3">Categories</h3>
            <ul class="list-group">
                @foreach ($categories as $category)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route('categories.show', $category->id) }}" class="text-decoration-none">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        @endif
    @endif
</div>
@endsection
