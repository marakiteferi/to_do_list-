@extends('layout')

@section('title', 'Create Account')

@section('content')
    <h1>Create an Account</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('register.post') }}" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>

        <button type="submit">Create Account</button>
    </form>

    <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
@endsection
