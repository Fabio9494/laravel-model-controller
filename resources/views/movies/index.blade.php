@extends('layout.app')


@section('content')
    <h1>Movies</h1>
    @foreach ($movies as $movie)
        <div class="card bg-primary m-2 w-25 text-center">
            <div class="card-body">
                <h5 class="fw-bold">{{ $movie->title }}</h5>
                <h6 class="fw-bold mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                <p class="fw-bold text-white">NAZIONE: {{ $movie->nationality }}</p>
                <p class="fw-bold text-white">DATA DI USCITA: {{ $movie->date }}</p>
                <p class="fw-bold text-white">VOTO: {{ $movie->vote }}</p>
            </div>
        </div>
    @endforeach
@endsection
