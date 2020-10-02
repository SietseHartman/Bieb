@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Boeks</h1>

<nav class="nav">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('boeks.index') }}">Index</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('boeks.create') }}">Create</a>
        </li>
        <li class="nav-item">
        <li>
            <a class="nav-link active" href="{{ route('boeks.show',
                    ['boek' => $boek->id]) }}">Boek Details</a>
        </li>
    </ul>
</nav>

<div class="card">
    <div class="card-header">
    informatie over het boek
    </div>
    <div class="card-body">
        <h2 class="card-title">{{ $boek->name }}</h2>
        <p class="card-text">{{ $boek->description }}</p>
        <p class="card-text">Het boek heeft: {{ $boek->pagina }} pagina's</p>
    </div>
</div>

@endsection