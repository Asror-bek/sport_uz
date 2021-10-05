@extends('layouts.admin')

@section('content')

    <form action="{{ route("admin.ligaPostScorer.store") }}" method="POST" >
        @csrf
        <div class="form-group">
            <label for="name" class="control-label">{{__('Имя футболиста')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="text" class="form-control" name="footballer_name" id="footballer_name" value="{{old("footballer_name")}}" placeholder="{{__("Имя футболиста")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">{{__('Голи')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="number" class="form-control" name="goals" id="goals" value="{{old("goals")}}" placeholder="{{__("Голи")}}">
            </div>
        </div>
        <div>
            <label for="Liga_postId" class="control-label">{{__("Категория лиги")}}</label>
            <select id="Liga_postId" name="Liga_postId" class="form-control " style="width:100%">
                <option selected disabled>{{__("Выберите категория лиги")}}...</option>
                @foreach($ligaPost as $ligaPosts)
                    <option value="{{$ligaPosts->id}}">{{$ligaPosts->name}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>



@endsection
