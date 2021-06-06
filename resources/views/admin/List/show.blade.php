@extends('layouts.app')
@section('content')


            <div class="form-group">
                <label for="list_id">list id</label>
                <input type="text" value="{{$list[0]->list_id}}" class="form-control" name="list_id" id="list_id">
            </div>
            <div class="form-group">
                <label for="list_name">list name</label>
                <input type="text" value="{{$list[0]->list_name}}" class="form-control" name="list_name" id="list_name">
            </div>
            <div class="form-group">
                <label for="list_name_encoded">list name encoded</label>
                <input type="text" value="{{$list[0]->list_name_encoded}}" class="form-control" name="list_name_encoded" id="list_name_encoded">
            </div>
            <div class="form-group">
                <label for="display_name">display name</label>
                <input type="text" value="{{$list[0]->display_name}}" class="form-control" name="display_name" id="display_name">
            </div>
            <div class="form-group">
                <label for="updated">updated</label>
                <input type="text" value="{{$list[0]->updated}}" class="form-control" name="updated" id="updated">
            </div>
            <div class="form-group">
                <label for="list_image">list image</label>
                <input type="text" value="{{$list[0]->list_image}}" class="form-control" name="list_image" id="list_image">
            </div>
            <div class="form-group">
                <label for="list_image_width">list image width</label>
                <input type="text" value="{{$list[0]->list_image_width}}" class="form-control" name="list_image_width" id="list_image_width">
            </div>
            <div class="form-group">
                <label for="list_image_height">list image height</label>
                <input type="text" value="{{$list[0]->list_image_height}}" class="form-control" name="list_image_height" id="list_image_height">
            </div>
            <a class="maintaining" href ="{{route('admin.lists')}}">Back to maintaining</a>
@endsection
