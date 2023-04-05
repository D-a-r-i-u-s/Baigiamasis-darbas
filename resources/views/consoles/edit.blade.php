@extends('layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Keisti konsolę [{{ $console->title ?? '' }}][{{ $console->id ?? '' }}]</h3>
        </div>
        <form action="{{ route('consoles.update', $console) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{ $console->id ?? '' }}">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Pavadinimas</label>
                    <input type="text" class="form-control" name="title" value="{{ $console->title ?? '' }}"
                           id="title" placeholder="Pavadinimas">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Patvirtinti</button>
            </div>
        </form>
    </div>
@endsection
