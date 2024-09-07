@extends('layout')

@section('title', 'View User')

@section('content')
    <h1>{{ $user->username }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Created At: {{ $user->created_at }}</p>
    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
