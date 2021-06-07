@extends('layouts.app')
@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif
    <div class="container">
        <h2>Buy links details</h2>
        <ul class="list-group">
            <li class="list-group-item">{{$buy_links->name}}</li>
            <li class="list-group-item">{{$buy_links->url}}</li>
        </ul>
        <a class="maintaining" href ="/home">Back to index</a>
    </div>
@endsection
