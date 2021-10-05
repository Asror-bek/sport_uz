@extends('layouts.admin')

@section('content')

@if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif

    <form action="{{ route("admin.ligaSeason.store") }}" method="POST" enctype="multipart/form-data" >
        @csrf
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
            <label for="name" class="control-label">{{__('Результат')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="number" class="form-control" name="result" id="result" value="{{old("result")}}" placeholder="{{__("Результат")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">{{__('Игра')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="number" class="form-control" name="game" id="game" value="{{old("game")}}" placeholder="{{__("Игра")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">{{__('Победить')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="number" class="form-control" name="win" id="win" value="{{old("win")}}" placeholder="{{__("Победить")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">{{__('Равенство')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="number" class="form-control" name="draw" id="draw" value="{{old("draw")}}" placeholder="{{__("Равенство")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">{{__('Поражение')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="number" class="form-control" name="defeat" id="defeat" value="{{old("defeat")}}" placeholder="{{__("Поражение")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">{{__('Голи команды')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="text" class="form-control" name="team_goals" id="team_goals" value="{{old("team_goals")}}" placeholder="{{__("Голи команды")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">{{__('Счет')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="text" class="form-control" name="score" id="score" value="{{old("score")}}" placeholder="{{__("Счет")}}">
            </div>
        </div>
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
            <label for="name" class="control-label">{{__('Голы футболистов')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="number" class="form-control" name="footballer_goals" id="footballer_goals" value="{{old("Голы футболистов")}}" placeholder="{{__("Голы футболистов")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">{{__('Пенальти')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="number" class="form-control" name="penalti" id="penalti" value="{{old("penalti")}}" placeholder="{{__("Пенальти")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">{{__('Паc')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="number" class="form-control" name="pas" id="pas" value="{{old("pas")}}" placeholder="{{__("Паc")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">{{__('Гол + Пас')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="text" class="form-control" name="golpas" id="golpas" value="{{old("golpas")}}" placeholder="{{__("Гол + Пас")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="LigaCategoryId" class="control-label">{{__("Категория лиги")}}</label>
            <select id="LigaCategoryId" name="LigaCategoryId" class="form-control " style="width:100%">
                <option selected disabled>{{__("Выберите категория лиги")}}...</option>
                @foreach($ligaCategory as $ligaCategories)
                    <option value="{{$ligaCategories->id}}">{{$ligaCategories->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image" class="control-label"> </label>
                <input type="file" name="logo" id="logo" class="dropify"
                       data-allowed-file-extensions="jpg jpeg png mp4"/>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>



@endsection
