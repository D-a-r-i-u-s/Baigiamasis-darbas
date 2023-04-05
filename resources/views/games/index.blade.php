@extends('layouts.document')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Žaidimai</h3>
                    <a href="{{ route('games.create') }} " class="btn btn-app">
                        <i class="fas fa-plus"></i> Naujas žaidimas
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Paveikslėlis</th>
                            <th>Pavadinimas</th>
                            <th>Išleidimo data</th>
                            <th>Aprašymas</th>
                            <th>Kaina</th>
                            <th>Kiekis</th>
                            <th>Reitingas</th>
                            <th>Konsolė</th>
                            <th>Žanras</th>
                            <th>Veiksmai</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($games as $game)
                            <tr>
                                <td>{{ ($game->id ?? '')}} </td>
                                <td>
                                    <img width="100" src="{{ $game->image }} ">
                                </td>
                                <td> {{ ($game->title ?? '') }} </td>
                                <td> {{ ($game->release_date ?? '') }} </td>
                                <td> {{ ($game->description ?? '') }} </td>
                                <td> {{ ($game->price ?? '') }} </td>
                                <td> {{ ($game->stock ?? '') }} </td>
                                <td> {{ ($game->rating ?? '') }} </td>
                                <td>
                                    <a href="{{route('consoles.edit', $game->console )}}">
                                        {{$game->console->title ?? ''}}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('genres.edit', $game->genre )}}">
                                        {{$game->genre->title ?? ''}}
                                    </a>
                                </td>

                                <td>
                                    <div class="btn-group">
                                        <a href='{{ route('games.edit', $game) }} ' type="button"
                                           class="btn btn-info">Keisti</a>

                                        <form action="{{ route('games.destroy', $game) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Naikinti</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Paveikslėlis</th>
                            <th>Pavadinimas</th>
                            <th>Išleidimo data</th>
                            <th>Aprašymas</th>
                            <th>Kaina</th>
                            <th>Kiekis</th>
                            <th>Reitingas</th>
                            <th>Konsolė</th>
                            <th>Žanras</th>
                            <th>Veiksmai</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection
