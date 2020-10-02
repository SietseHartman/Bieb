@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Boek</h1>


    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('boeks.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('boeks.create') }}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('boeks.delete', ['boek'=> $boek->id ])}}">Delete Boek</a>
            </li>
        </ul>
    </nav>

<form method="POST" action="{{ route('boeks.destroy', ['boek' => $boek->id]) }}">
    @method('DELETE')
    @csrf

    <div class="form-group">
        <label for="name">Boek naam</label>
        <input type="text" name="name" class="form-control" id="name"
               aria-describedby="boeknameHelp" value="{{ old('name', $boek->name) }}" disabled="disabled">
    </div>
    <div class="form-group">
        <label for="description">description</label>
        <textarea name="description" id="description" rows="3"
                  class="form-control" disabled="disabled">{{ old('description', $boek->description) }}</textarea>
    </div>
    <div class="form-group">
        <label for="pagina">Pagina's</label>
        <input type="text" class="form-control" name="pagina" id="pagina" aria-describedby="paginaHelp"
               value="{{ old('pagina', $boek->pagina) }}" disabled="disabled">
    </div>
    <button type="submit" class="btn btn-primary">delete</button>
</form>
@endsection

