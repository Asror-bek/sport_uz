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
                        <i class="fa fa-fw fa-file-text-o"></i> <b>{{__('Редактировать лучшие бомбардиры ')}}</b>
                    </div>
                </div>
                <br>
                <form action="{{ route("admin.ligaPostScorer.update", $ligaPostScorer->id) }}" method="POST" >
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-lg-2 col-md-12 col-form-label  text-lg-right text-left">
                            {{__("Имя футболиста    ")}}
                        </label>
                        <div class="col-lg-10 col-md-12">
                            <div class="input-group input-ground-prepend">
                                <span class="input-group-text border-right-0 rounded-0">
                                    <i class="fa fa-fw fa-file-text-o"></i>
                                </span>
                                <input type="text" class="form-control" name="footballer_name" id="footballer_name"  value="{{$ligaPostScorer->footballer_name}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-lg-2 col-md-12 col-form-label  text-lg-right text-left">
                            {{__("Голи")}}
                        </label>
                        <div class="col-lg-10 col-md-12">
                            <div class="input-group input-ground-prepend">
                                <span class="input-group-text border-right-0 rounded-0">
                                    <i class="fa fa-fw fa-file-text-o"></i>
                                </span>
                                <input type="text" class="form-control" name="goals" id="goals"  value="{{$ligaPostScorer->goals}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Liga_postId" class="col-lg-2 col-md-12 col-form-label text-lg-right text-left">
                            {{__("Категория лиги")}}
                        </label>
                        <div class="col-lg-10 col-md-12">
                            <select id="Liga_postId" name="Liga_postId" class="form-control " style="width:100%">
                                @foreach($ligaPost as $ligaPosts)
                                    <option value="{{$ligaPosts->id}}" {{$ligaPosts->id !== $ligaPostScorer->Liga_postId ?: "selected"}}>{{$ligaPosts->name}}</option>
                                @endforeach
                            </select>
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
