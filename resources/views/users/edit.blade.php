@extends('layout')

@section('title', 'Edit User')

@section('content')
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="{{ $user->username }}" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        
        <button type="submit">Update User</button>
    </form>
@endsection
