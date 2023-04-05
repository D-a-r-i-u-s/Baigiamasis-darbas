@extends('layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Naujas žaidimas</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Pavadinimas</label>
                    <input type="text" value="{{old('title')}}" class="form-control" name="title" id="title"
                           placeholder="Pavadinimas">
                </div>

                <div class="form-group">
                    <label for="release-date">Išleidimo data</label>
                    <input type="date" value="{{old('release_date')}}" class="form-control" name="release_date"
                           id="release-date"
                           placeholder="Išleidimo data">
                </div>

                <div class="form-group">
                    <label for="description">Aprašymas</label>
                    <input type="text" value="{{old('description')}}" class="form-control" name="description"
                           id="description" placeholder="Aprašymas">
                </div>

                <div class="form-group">
                    <label for="price">Kaina</label>
                    <input type="number" value="{{old('price')}}" class="form-control" max="1000" name="price"
                           id="price" placeholder="Kaina">
                </div>

                <div class="form-group">
                    <label for="stock">Kiekis</label>
                    <input type="number" value="{{old('stock')}}" class="form-control" max="1000" name="stock"
                           id="stock" placeholder="Kiekis">
                </div>

                <div class="form-group">
                    <label for="rating">Reitingas</label>
                    <input type="text" value="{{old('rating')}}" class="form-control" maxlength="5" name="rating"
                           id="rating"
                           placeholder="Reitingas">
                </div>

                <x-forms.multi-relation-select :tagName="'console_id'" :relationItems="$consoles"
                                               :optionDisplay="'title'"/>

                <x-forms.multi-relation-select :tagName="'genre_id'" :relationItems="$genres" :optionDisplay="'title'"/>

                <div class="form-group">
                    <label for="image">Paveikslėlis</label>
                    <input type="text" value="{{old('image')}}"  class="form-control" name="image" id="image" placeholder="Paveikslėlio URL">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Patvirtinti</button>
            </div>
        </form>
    </div>
@endsection
