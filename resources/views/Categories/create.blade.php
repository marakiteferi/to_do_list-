@extends('layout')

@section('title', 'Create Category')

@section('content')
    <h1>Create Category</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <button type="submit">Create Category</button>
    </form>
@endsection
