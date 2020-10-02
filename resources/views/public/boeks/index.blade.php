@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Boeks</h1>

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<nav class="nav">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('boeks.index') }}">Index</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('boeks.create') }}">Create</a>
        </li>
    </ul>
</nav>

        <table class="table .table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Boeks</th>
                <th scope="col">Details</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($boeks as $boek)
            <tr>
                <td scope="row">{{ $boek->id }}</td>
                <td>{{ $boek->name }}</td>
                <td><a href="{{ route('boeks.show', ['boek'=> $boek->id])}}">Details</a></td>
                <td><a href="{{ route('boeks.edit', ['boek'=> $boek->id])}}">Edit</a></td>
                <td><a href="{{ route('boeks.delete', ['boek'=> $boek->id])}}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection