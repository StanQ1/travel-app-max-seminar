@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Přidat nový zájezd</h2>

        <form action="{{ route('admin.trips.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nazev" class="form-label">Název zájezdu</label>
                <input type="text" class="form-control" id="nazev" name="nazev" required>
            </div>

            <div class="mb-3">
                <label for="destinace" class="form-label">Destinace</label>
                <input type="text" class="form-control" id="destinace" name="destinace" required>
            </div>

            <div class="mb-3">
                <label for="cena" class="form-label">Cena</label>
                <input type="number" class="form-control" id="cena" name="cena" required>
            </div>

            <div class="mb-3">
                <label for="obrazek" class="form-label">Název obrázku</label>
                <input type="text" class="form-control" id="obrazek" name="obrazek" required>
            </div>

            <div class="mb-3">
                <label for="popis" class="form-label">Popis</label>
                <textarea class="form-control" id="popis" name="popis" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Přidat zájezd</button>
        </form>
    </div>
@endsection
