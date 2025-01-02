@extends('layouts.app')

@section('content')
    <div class="trip-details">
        <div class="trip-header">
            <h1 class="trip-title">{{ $trip->nazev }}</h1>
        </div>
        
        <div class="trip-content">
            <img class="trip-image" src="{{ asset('images/' . $trip->obrazek) }}" alt="Obrázek destinace">
            <div class="trip-info">
                <p><strong>Destinace:</strong> {{ $trip->destinace }}</p>
                <p><strong>Popis:</strong> {{ $trip->popis }}</p>
            </div>
        </div>
    </div>
@endsection

<style>
    .trip-details {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        font-family: 'Arial', sans-serif;
    }

    .trip-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .trip-title {
        font-size: 2rem;
        color: #333;
        margin-bottom: 10px;
    }

    .trip-content {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .trip-image {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .trip-info {
        font-size: 1.1rem;
        color: #555;
        text-align: left;
        width: 100%;
    }

    .trip-info p {
        margin: 10px 0;
    }

    .trip-info strong {
        color: #222;
    }
</style>
