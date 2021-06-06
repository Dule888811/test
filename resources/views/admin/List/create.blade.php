@extends('layouts.app')
@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif
    <form method="POST" action="{{route('admin.list.store')}}">
        <form>
            @csrf
            <div class="form-group">
                <label for="list_id">list id</label>
                <input type="text" class="form-control" name="list_id" id="list_id"  placeholder="Enter list id">
            </div>
            <div class="form-group">
                <label for="list_name">list name</label>
                <input type="text" class="form-control" name="list_name" id="list_name"  placeholder="Enter list name">
            </div>
            <div class="form-group">
                <label for="list_name_encoded">list name encoded</label>
                <input type="text" class="form-control" name="list_name_encoded" id="list_name_encoded"  placeholder="Enter list name encoded">
            </div>
            <div class="form-group">
                <label for="display_name">display name</label>
                <input type="text" class="form-control" name="display_name" id="display_name"  placeholder="Enter display name">
            </div>
            <div class="form-group">
                <label for="updated">updated</label>
                <input type="text" class="form-control" name="updated" id="updated"  placeholder="Enter updated">
            </div>
            <div class="form-group">
                <label for="list_image">list image</label>
                <input type="text" class="form-control" name="list_image" id="list_image"  placeholder="Enter list image">
            </div>
            <div class="form-group">
                <label for="list_image_width">list image width</label>
                <input type="text" class="form-control" name="list_image_width" id="list_image_width" placeholder="Enter list image width">
            </div>
            <div class="form-group">
                <label for="list_image_height">list image height</label>
                <input type="text" class="form-control" name="list_image_height" id="list_image_height"  placeholder="Enter list image height">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="maintaining" href ="{{route('admin.lists')}}">Back to maintaining</a>
        </form>
