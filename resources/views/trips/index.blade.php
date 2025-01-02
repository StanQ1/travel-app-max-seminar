@extends('layouts.app')

@section('content')
    <form action="{{ route('search') }}" method="get">
        <input type="text" name="search" placeholder="Hledat zajezdy..." value="{{ request()->query('search') }}">
        <button type="submit">Hledat</button>
    </form>

    @foreach($trips as $trip)
        <div>
            <h3><a href="{{ route('trip.show', $trip->id) }}">{{ $trip->nazev }}</a></h3>
            <p>{{ $trip->destinace }} - {{ $trip->cena }} Kč</p>
        </div>
    @endforeach
@endsection
