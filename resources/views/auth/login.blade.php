@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Přihlášení</h1>

        <form action="/login" method="POST">
            @csrf

            <div class="mb-3">
                <label for="username" class="form-label">Uživatelské jméno</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Uživatelské jméno" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Heslo</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Heslo" required>
            </div>

            <button type="submit" class="btn btn-primary">Přihlásit se</button>
        </form>
    </div>
@endsection
