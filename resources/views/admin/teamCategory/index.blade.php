@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right card">
                <a href="{{ route("admin.teamCategory.create") }}" class="btn btn-success">Создать</a>
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
                                {{-- <th>Image</th> --}}
                                <th></th>
                            </tr>
                            @foreach ($teamCategory as $val)
                            <tr>
                                <td>{{ $val->id }}</td>
                                <td>{{ $val->name }}</td>
                                {{-- <td><img src="{{ $val->getFirstMediaUrl('images', 'full-size') }}" style="width: 50px height: 50px"></td> --}}
                                <th>
                                    <a href="{{route('admin.teamCategory.edit', $val->id)}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('admin.teamCategory.destroy', $val->id)}}"><i class="fas fa-trash-alt"></i></a>
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
