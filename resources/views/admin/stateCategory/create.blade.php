@extends('layouts.admin')

@section('content')

    <form action="{{ route("admin.stateCategory.store") }}" method="POST" >
        @csrf
        <div class="form-group">
            <label for="name" class="control-label">{{__('Название государственная категория')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="text" class="form-control" name="name" id="name" value="{{old("name")}}" placeholder="{{__("Название государственная категория")}}">
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>



@endsection
