@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Admin</title>
    </head>
    <body>
        <h2>Admin Login</h2>

        @if(session('error'))
            <p>{{ session('error') }}</p>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br>

            <button type="submit">Login</button>
        </form>
    </body>
    </html>

@endsection

