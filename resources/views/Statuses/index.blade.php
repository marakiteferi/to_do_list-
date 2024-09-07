@extends('layout')

@section('title', 'Statuses')

@section('content')
    <h1>Statuses</h1>

    <ul>
        @foreach ($statuses as $status)
            <li>{{ $status->status_name }}</li> <!-- Show status names without links to edit or delete -->
        @endforeach
    </ul>
@endsection
