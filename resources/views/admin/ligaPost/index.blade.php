@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right card">
                <a href="{{ route("admin.ligaPost.create") }}" class="btn btn-success">Создать</a>
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
                                <th>Name</th>
                                <th>State_category</th>
                                <th></th>
                            </tr>
                            @foreach ($ligaPost as $val)
                            <tr>
                                <td>{{ $val->id }}</td>
                                <td>{{ $val->name }}</td>
                                <td>{{ $val->stateCategory->name}}</td>
                                <th>
                                    <a href="{{route('admin.ligaPost.edit', $val->id)}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('admin.ligaPost.destroy', $val->id)}}"><i class="fas fa-trash-alt"></i></a>
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
