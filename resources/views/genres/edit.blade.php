@extends('layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Keisti žaidimą [{{ $genre->title ?? '' }}][{{ $genre->id ?? '' }}]</h3>
        </div>
        <form action="{{ route('genres.update', $genre) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{ $genre->id ?? '' }}">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Pavadinimas</label>
                    <input type="text" class="form-control" name="title"
                           value="{{ $genre->title ?? '' }}"
                           id="title" placeholder="Pavadinimas">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Patvirtinti</button>
            </div>
        </form>
    </div>
@endsection
