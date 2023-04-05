@extends('layouts.document')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Konsolės</h3>
                    <a href="{{ route('consoles.create') }} " class="btn btn-app">
                        <i class="fas fa-plus"></i> Nauja konsolė
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
                        @foreach ($consoles as $console)
                            <tr>
                                <td>{{ ($console->id ?? '')}} </td>
                                <td> {{ ($console->title ?? '') }} </td>
                                <td> {{ ($console->games_count ?? '') }} </td>

                                <td>
                                    <div class="btn-group">
                                        <a href='{{ route('consoles.edit', $console) }} ' type="button"
                                           class="btn btn-info">Keisti</a>

                                        <form action="{{ route('consoles.destroy', $console) }}" method="POST">
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
