@extends('layouts.admin')

@section('content')

    <form action="{{ route("admin.news.store") }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name" class="control-label">{{__('Название новости')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="text" class="form-control" name="name" id="name" value="{{old("name")}}" placeholder="{{__("Название новости")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">{{__('Описание')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="text" class="form-control" name="description" id="description" value="{{old("description")}}" placeholder="{{__("Описание")}}">
            </div>
        </div>
        <div>
            <label for="CategoryId" class="control-label">{{__("Категория ")}}</label>
            <select id="CategoryId" name="CategoryId" class="form-control " style="width:100%">
                <option selected disabled>{{__("Выберите категория ")}}...</option>
                @foreach($category as $categories)
                    <option value="{{$categories->id}}">{{$categories->name}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div>
            <label for="Team_categoryId" class="control-label">{{__("Категория команды")}}</label>
            <select id="Team_categoryId" name="Team_categoryId" class="form-control " style="width:100%">
                <option selected disabled>{{__("Выберите категория команды")}}...</option>
                @foreach($teamCategory as $teamCategories)
                    <option value="{{$teamCategories->id}}">{{$teamCategories->name}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="image" class="control-label"> </label>
                <input type="file" name="image" id="image" class="dropify"
                       data-allowed-file-extensions="jpg jpeg png mp4"/>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>



@endsection
