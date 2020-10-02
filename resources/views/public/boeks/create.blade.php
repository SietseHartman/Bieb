@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Boeks</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('boeks.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('boeks.create') }}">Create</a>
            </li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('boeks.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Boek naam</label>
            <input type="text" name="name" class="form-control" id="name"
                   aria-describedby="categorienameHelp" placeholder="Enter Boek naam">
        <div>
        <div class="form-group">
            <label for="name">Boek beschrijving</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        <div>
        <div class="form-group">
            <label for="name">Aantal pagina's</label>
            <input type="text" name="pagina" class="form-control" id="pagina"
                   aria-describedby="paginaHelp" placeholder="Aantal pagina's">
        <div>
        <br>
        <button type="Submit" class="btn btn-primary">Submit</button>
    </form>

@endsection