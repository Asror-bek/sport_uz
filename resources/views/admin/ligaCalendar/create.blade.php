@extends('layouts.admin')

@section('content')

@if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif

    <form action="{{ route("admin.ligaCalendar.store") }}" method="POST" >
        @csrf
        <div class="form-group">
            <label for="name" class="control-label">{{__('Разновидность')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="text" class="form-control" name="species" id="species" value="{{old("species")}}" placeholder="{{__("Разновидность")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">{{__('Дата')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="date" class="form-control" name="date" id="date" value="{{old("date")}}" placeholder="{{__("Дата")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">{{__('Название команды')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="text" class="form-control" name="team_name" id="team_name" value="{{old("team_name")}}" placeholder="{{__("Название команды")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">{{__('Результат команды')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="number" class="form-control" name="team_result" id="team_result" value="{{old("win")}}" placeholder="{{__("Результат команды")}}">
            </div>
        </div>
        <div>
            <label for="LigaCategoryId" class="control-label">{{__("Категория лиги")}}</label>
            <select id="LigaCategoryId" name="LigaCategoryId" class="form-control " style="width:100%">
                <option selected disabled>{{__("Выберите категория лиги")}}...</option>
                @foreach($ligaCategory as $ligaCategories)
                    <option value="{{$ligaCategories->id}}">{{$ligaCategories->name}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>
    </form>



@endsection
