@extends('layout')

@section('title', 'View Status')

@section('content')
    <h1>{{ $status->status_name }}</h1>
@endsection
