@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right card">
                <a href="{{ route("admin.ligaCalendar.create") }}" class="btn btn-success">Создать</a>
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
                                <th>Species</th>
                                <th>Date</th>
                                <th>Team_name</th>
                                <th>Team_result</th>
                                <th>LigaCategory</th>
                                <th></th>
                            </tr>
                            @foreach ($ligaCalendar as $val)
                            <tr>
                                <td>{{ $val->id }}</td>
                                <td>{{ $val->species }}</td>
                                <td>{{ $val->date }}</td>
                                <td>{{ $val->team_name }}</td>
                                <td>{{ $val->team_result }}</td>
                                <td>{{ $val->ligaCategory->name }}</td>
                                <th>
                                    <a href="{{route('admin.ligaCalendar.edit', $val->id)}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('admin.ligaCalendar.destroy', $val->id)}}"><i class="fas fa-trash-alt"></i></a>
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
