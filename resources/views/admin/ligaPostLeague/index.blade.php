@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right card">
                <a href="{{ route("admin.ligaPostLeague.create") }}" class="btn btn-success">Создать</a>
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
                                <th>Team_name</th>
                                <th>Games</th>
                                <th>Score</th>
                                <th>LigaPost</th>
                                <th></th>
                            </tr>
                            @foreach ($ligaPostLeague as $val)
                            <tr>
                                <td>{{ $val->id }}</td>
                                <td>{{ $val->team_name }}</td>
                                <td>{{ $val->games }}</td>
                                <td>{{ $val->score }}</td>
                                <td>{{ $val->ligaPost->name}}</td>
                                <th>
                                    <a href="{{route('admin.ligaPostLeague.edit', $val->id)}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('admin.ligaPostLeague.destroy', $val->id)}}"><i class="fas fa-trash-alt"></i></a>
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
