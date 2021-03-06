@extends('layouts.app')
@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif
    @foreach($books as $book)
        <ul class="ul-products">
            <li class="li-products">Title: {{$book->title}}</li>
            <li class="li-products"><a class="btn btn-primary"  href ="{{route('user.book.edit',['id'=> $book->id])}}">Edit</a></li>

            <form method="POST" action="{{route('user.book.destroy', ['id' => $book->id])}}">
                @csrf
                <button type="submit" class="btn btn-primary">Delete</button>
            </form>
            <li class="li-products"><a class="btn btn-primary"  href ="listCreate">Add book</a></li>
            <li class="li-products"><a class="btn btn-primary"  href ="bookShow/{{$book->id}}">Show details book</a></li>
            <li class="li-products"><a class="btn btn-primary"  href ="{{route('user.buyLinks',['id'=> $book->id])}}">See buy_links</a></li>
        </ul>
    @endforeach
    <a class="maintaining" href ="/home">Back to index</a>
@endsection
