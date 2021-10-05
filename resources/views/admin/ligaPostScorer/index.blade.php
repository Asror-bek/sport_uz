@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right card">
                <a href="{{ route("admin.ligaPostScorer.create") }}" class="btn btn-success">Создать</a>
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
                                <th>Footballer_name</th>
                                <th>Goals</th>
                                <th>LigaPost</th>
                                <th></th>
                            </tr>
                            @foreach ($ligaPostScorer as $val)
                            <tr>
                                <td>{{ $val->id }}</td>
                                <td>{{ $val->footballer_name }}</td>
                                <td>{{ $val->goals }}</td>
                                <td>{{ $val->ligaPost->name}}</td>
                                <th>
                                    <a href="{{route('admin.ligaPostScorer.edit', $val->id)}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('admin.ligaPostScorer.destroy', $val->id)}}"><i class="fas fa-trash-alt"></i></a>
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
