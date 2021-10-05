@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right card">
                <a href="{{ route("admin.ligaSeason.create") }}" class="btn btn-success">Создать</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-primary filterable">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" >
                            <tr>
                                <th>#</th>
                                <th>Team_Name</th>
                                <th>Result</th>
                                <th>Game</th>
                                <th>Win</th>
                                <th>Draw</th>
                                <th>Defeat</th>
                                <th>Team_goals</th>
                                <th>Score</th>
                                <th>Footballer_name</th>
                                <th>Footballer_goals</th>
                                <th>Penalti</th>
                                <th>Pas</th>
                                <th>Gol+Pas</th>
                                <th></th>
                            </tr>
                            @foreach ($ligaSeason as $val)
                            <tr>
                                <td>{{ $val->id }}</td>
                                <td>{{ $val->team_name }}</td>
                                <td>{{ $val->result }}</td>
                                <td>{{ $val->game }}</td>
                                <td>{{ $val->win }}</td>
                                <td>{{ $val->draw }}</td>
                                <td>{{ $val->defeat }}</td>
                                <td>{{ $val->team_goals }}</td>
                                <td>{{ $val->score }}</td>
                                <td>{{ $val->footballer_name }}</td>
                                <td>{{ $val->footballer_goals }}</td>
                                <td>{{ $val->penalti }}</td>
                                <td>{{ $val->pas }}</td>
                                <td>{{ $val->golpas }}</td>

                                {{-- <td><img src="{{ $val->getFirstMediaUrl('images', 'full-size') }}" style="width: 50px height: 50px"></td> --}}
                                <th>
                                    <a href="{{route('admin.ligaSeason.edit', $val->id)}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('admin.ligaSeason.destroy', $val->id)}}"><i class="fas fa-trash-alt"></i></a>
                                </th>
                            </tr>

                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
