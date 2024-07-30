@extends('layout')

@section('title', 'Statuses')

@section('content')
    <h1>Statuses</h1>
    <a href="{{ route('statuses.create') }}">Create New Status</a>
    <ul>
        @foreach($statuses as $status)
            <li>
                <a href="{{ route('statuses.show', $status->id) }}">{{ $status->status_name }}</a>
                <a href="{{ route('statuses.edit', $status->id) }}">Edit</a>
                <form action="{{ route('statuses.destroy', $status->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
