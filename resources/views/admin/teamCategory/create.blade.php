@extends('layouts.admin')

@section('content')

    <form action="{{ route("admin.teamCategory.store") }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
            <label for="name" class="control-label">{{__('Название категории')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="text" class="form-control" name="name" id="name" value="{{old("Name")}}" placeholder="{{__("Название категории")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="image" class="control-label"> </label>
                <input type="file" name="image" id="image" class="dropify"
                       data-allowed-file-extensions="jpg jpeg png mp4"/>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>



@endsection
