<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Laravel App</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                @auth
                    <li class="nav-item"><a class="nav-link" href="{{ route('tasks.index') }}">Tasks</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Categories</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="{{ route('statuses.index') }}">Statuses</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('users.create') }}">Create User</a></li> --}}
                @endauth
            </ul>
            <ul class="navbar-nav ml-auto">
                @auth
                    <!-- User is logged in, show logout link -->
                    <li class="nav-item"><a class="nav-link" href="#">Welcome, {{ Auth::user()->name }}</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <!-- User is not logged in, show login and register links -->
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @endauth
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
