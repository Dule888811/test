@extends('layouts.app')
@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif
    <form method="POST" action="{{route('user.buyLink.store')}}">
        <form>
            @csrf
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control" name="name" id="name"  placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="url"> url</label>
                <input type="text"  class="form-control" name="url" id="url" placeholder=" url" required>
            </div>
            <select name="book_id" id="book_id">
                @foreach($books as $book)
                    <option value="{{$book->id}}">{{$book->title}}</option>
                @endforeach
            </select>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </form>
    <a class="maintaining" href ="/home">Back to index</a>
@endsection
