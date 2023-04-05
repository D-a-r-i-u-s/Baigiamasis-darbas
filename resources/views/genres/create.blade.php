@extends('layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Naujas žanras</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('genres.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Pavadinimas</label>
                    <input type="text" value="{{old('title')}}" class="form-control" name="title" id="title"
                           placeholder="Pavadinimas">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Patvirtinti</button>
            </div>
        </form>
    </div>
@endsection
