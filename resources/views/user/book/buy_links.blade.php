@extends('layouts.app')
@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif
    @foreach($Buy_links as $buy_link)
        <ul class="ul-products">
            <li class="li-products">Title: {{$buy_link->name}}</li>
            <li class="li-products"><a class="btn btn-primary"  href ="{{route('user.buyLink.edit', ['id' => $buy_link->id])}}">Edit</a></li>

            <form method="POST" action="{{route('user.buyLink.destroy', ['id' => $buy_link->id])}}">
                @csrf
                <button type="submit" class="btn btn-primary">Delete</button>
            </form>
            <li class="li-products"><a class="btn btn-primary"  href ="{{route('user.buyLinks.create', ['id' => $buy_link->id])}}">Add Link</a></li>
            <li class="li-products"><a class="btn btn-primary"  href ={{route('user.buyLink.show', ['id' => $buy_link->id])}}">Show details buy links</a></li>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  .buyLink.show', ['id' => $buy_link->id])}}">Show details buy links</a></li>
        </ul>
    @endforeach
    <a class="maintaining" href ="/home">Back to index</a>
@endsection
