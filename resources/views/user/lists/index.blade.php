@extends('layouts.app')
@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif
    @foreach($lists as $list)
        <ul class="ul-products">
            <li class="li-products">Title: {{$list->list_name}}</li>
            <li class="li-products"><a class="btn btn-primary"  href ="listEdit/{{$list->list_id}}">Edit list</a></li>

            <form method="POST" action="{{route('user.list.destroy', ['list_id' => $list->list_id])}}">
                @csrf
                <button type="submit" class="btn btn-primary">Delete list</button>
            </form>
            <li class="li-products"><a class="btn btn-primary"  href ="listCreate">Add list</a></li>
            <li class="li-products"><a class="btn btn-primary"  href ="listShow/{{$list->list_id}}">Show details list</a></li>
        </ul>
    @endforeach
    <a class="maintaining" href ="/home">Back to index</a>
@endsection
