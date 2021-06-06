@extends('layouts.app')
@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif
    <div class="content-admin">


        <div class="links">
            <a class="admin-links" href="user/books">Books</a>
            <a class="admin-links" href="user/lists">Lists</a>
        </div>
    </div>
@endsection
