@extends('layouts.admin')

@section('content')

    <form action="{{ route("admin.ligaPost.store") }}" method="POST" >
        @csrf
        <div class="form-group">
            <label for="name" class="control-label">{{__('Название лиги')}}</label>
            <div class="input-group input-ground-prepend">
                <span class="input-group-text border-right-0 rounded-0">
                    <i class="fa fa-fw fa-file-text-o"></i>
                </span>
                <input type="text" class="form-control" name="name" id="name" value="{{old("name")}}" placeholder="{{__("Название категории")}}">
            </div>
        </div>
        <div>
            <label for="State_categoryId" class="control-label">{{__("Категория лиги")}}</label>
            <select id="State_categoryId" name="State_categoryId" class="form-control " style="width:100%">
                <option selected disabled>{{__("Выберите категория лиги")}}...</option>
                @foreach($stateCategory as $stateCategories)
                    <option value="{{$stateCategories->id}}">{{$stateCategories->name}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>



@endsection
