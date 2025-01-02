@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin - Trips</title>
    </head>
    <body>
        <h2>Seznam zájezdů</h2>
        <a href="{{ route('admin.trips.create') }}">Přidat nový zájezd</a>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit">Odhlásit se</button>
        </form>
        <form action="{{ route('admin.trips.store') }}" method="POST">

        <table border="1">
            <tr>
                <th>Název</th>
                <th>Destinace</th>
                <th>Cena</th>
                <th>Akce</th>
            </tr>
            @foreach ($trips as $trip)
                <tr>
                    <td>{{ $trip->nazev }}</td>
                    <td>{{ $trip->destinace }}</td>
                    <td>{{ $trip->cena }}</td>
                    <td>
                        <a href="{{ route('admin.trips.edit', $trip->id) }}">Upravit</a>
                        <form action="{{ route('admin.trips.destroy', $trip->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Smazat</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
    </html>
@endsection