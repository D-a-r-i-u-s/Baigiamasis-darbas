@extends('layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Keisti žaidimą [{{ $game->title ?? '' }}][{{ $game->id ?? '' }}]</h3>
        </div>
        <form action="{{ route('games.update', $game) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{ $game->id ?? '' }}">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Pavadinimas</label>
                    <input type="text" class="form-control" name="title" value="{{ $game->title ?? '' }}"
                        id="title" placeholder="Pavadinimas">
                </div>

                <div class="form-group">
                    <label for="release-date">Išleidimo data</label>
                    <input type="date" class="form-control" name="release_date"
                        value="{{ $game->release_date ?? '' }}" id="release-date" placeholder="Išleidimo data">
                </div>

                <div class="form-group">
                    <label for="description">Aprašymas</label>
                    <input type="text" class="form-control" name="description" value="{{ $game->description ?? '' }}"
                        id="description" placeholder="Aprašymas">
                </div>

                <div class="form-group">
                    <label for="price">Kaina</label>
                    <input type="number" class="form-control" max="1000" name="price"
                        value="{{ $game->price ?? '' }}" id="price" placeholder="Kaina">
                </div>

                <div class="form-group">
                    <label for="stock">Kiekis</label>
                    <input type="text" class="form-control" maxlength="5" name="stock"
                        value="{{ $game->stock ?? '' }}" id="stock" placeholder="Kiekis">
                </div>

                <div class="form-group">
                    <label for="rating">Reitingas</label>
                    <input type="text" value="{{ $game->rating ?? '' }}" class="form-control" maxlength="5" name="rating" id="rating" placeholder="Reitingas">
                </div>

                <x-forms.multi-relation-select :tagName="'genre_id'" :model="$game" relationName="genre" :relationItems="$genres" />

                <x-forms.multi-relation-select :tagName="'console_id'" :model="$game" relationName="console" :relationItems="$consoles" />

                <div class="form-group">
                    <label for="image">Paveikslėlis</label>
                    <input type="text" value="{{$game->image}}" class="form-control" name="image" id="image" placeholder="Paveikslėlio URL">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Patvirtinti</button>
            </div>
        </form>
    </div>
@endsection
