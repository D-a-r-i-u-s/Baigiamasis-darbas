@extends('layouts.document')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Žanrai</h3>
                    <a href="{{ route('genres.create') }} " class="btn btn-app">
                        <i class="fas fa-plus"></i> Naujas žanras
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pavadinimas</th>
                            <th>Žaidimų kiekis</th>
                            <th>Veiksmai</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($genres as $genre)
                            <tr>
                                <td>{{ ($genre->id ?? '')}} </td>
                                <td> {{ ($genre->title ?? '') }} </td>
                                <td> {{ ($genre->games_count ?? '') }} </td>

                                <td>
                                    <div class="btn-group">
                                        <a href='{{ route('genres.edit', $genre) }} ' type="button"
                                           class="btn btn-info">Keisti</a>

                                        <form action="{{ route('genres.destroy', $genre) }}" method="POST">
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
                            <th>Pavadinimas</th>
                            <th>Žaidimų kiekis</th>
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
