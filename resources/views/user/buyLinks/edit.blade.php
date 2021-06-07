@extends('layouts.app')
@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif

    <form method="POST" enctype="multipart/form-data" action="{{route('user.buyLink.update',['id' => $buy_link->id])}}">
        <form>
            @csrf
            <div class="form-group">
                <label for="name"> name</label>
                <input type="text" value="{{$buy_link->name}}" class="form-control" name="name" id="name"  >
            </div>
            <div class="form-group">
                <label for="url">Url</label>
                <input type="text" value="{{$buy_link->url}}" class="form-control" name="url" id="url">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a class="maintaining" href ="/home">Back to index</a>
@endsection
