@extends('layouts.admin')

@section('content')
   @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif

<div class="row">
        <div class="col-lg-12">
            <div class="card border-primary filterable">
                <div class="card-header bg-success text-white">
                    <div class="card-title d-inline pull-left">
                        <i class="fa fa-fw fa-file-text-o"></i> <b>{{__('Редактировать новости ')}}</b>
                    </div>
                </div>
                <br>
                <form action="{{ route("admin.news.update", $news->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-lg-2 col-md-12 col-form-label  text-lg-right text-left">
                            {{__("Название новости")}}
                        </label>
                        <div class="col-lg-10 col-md-12">
                            <div class="input-group input-ground-prepend">
                                <span class="input-group-text border-right-0 rounded-0">
                                    <i class="fa fa-fw fa-file-text-o"></i>
                                </span>
                                <input type="text" class="form-control" name="name" id="name"  value="{{$news->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-lg-2 col-md-12 col-form-label  text-lg-right text-left">
                            {{__("Описание")}}
                        </label>
                        <div class="col-lg-10 col-md-12">
                            <div class="input-group input-ground-prepend">
                                <span class="input-group-text border-right-0 rounded-0">
                                    <i class="fa fa-fw fa-file-text-o"></i>
                                </span>
                                <input type="text" class="form-control" name="description" id="description"  value="{{$news->description}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="CategoryId" class="col-lg-2 col-md-12 col-form-label text-lg-right text-left">
                            {{__("Категория лиги")}}
                        </label>
                        <div class="col-lg-10 col-md-12">
                            <select id="CategoryId" name="CategoryId" class="form-control " style="width:100%">
                                @foreach($category as $categories)
                                    <option value="{{$categories->id}}" {{$categories->id !== $news->CategoryId ?: "selected"}}>{{$categories->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Team_categoryId" class="col-lg-2 col-md-12 col-form-label text-lg-right text-left">
                            {{__("Категория лиги")}}
                        </label>
                        <div class="col-lg-10 col-md-12">
                            <select id="Team_categoryId" name="Team_categoryId" class="form-control " style="width:100%">
                                @foreach($teamCategory as $teamCategories)
                                    <option value="{{$teamCategories->id}}" {{$teamCategories->id !== $news->Team_categoryId ?: "selected"}}>{{$teamCategories->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Media" class="col-lg-2 col-md-12 col-form-label text-lg-right text-left">
                            {{__("Медиа")}}
                        </label>
                        <div class="col-lg-10 col-md-12">
                            <div class="input-group input-ground-prepend">
                                <span class="input-group-text border-right-0 rounded-0">
                                    <i class="fa fa-fw fa-file-text-o"></i>
                                </span>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="offset-lg-2 pull-right">
                            <button type="submit" class="btn btn-primary">{{__("Сохранить")}}</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection
