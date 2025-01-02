@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Upravit výlet</h1>

        <form action="{{ route('admin.trips.update', $trip->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Název výletu</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $trip->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="destination" class="form-label">Destinace</label>
                <input type="text" class="form-control" id="destination" name="destination" value="{{ old('destination', $trip->destination) }}" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Cena</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $trip->price) }}" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Název obrázku</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $trip->image) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Uložit změny</button>
        </form>
    </div>
@endsection
