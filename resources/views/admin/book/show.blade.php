@extends('layouts.app')
@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif
    <div class="container">
        <h2>Book details</h2>
        <ul class="list-group">
            <li class="list-group-item">{{$book->age_group}}</li>
            <li class="list-group-item">{{$book->amazon_product_url}}</li>
            <li class="list-group-item">{{$book->article_chapter_link}}</li>
            <li class="list-group-item">{{$book->author}}</li>
            <li class="list-group-item">{{$book->book_image}}</li>
            <li class="list-group-item">{{$book->book_image_width}}</li>
            <li class="list-group-item">{{$book->book_image_height}}</li>
            <li class="list-group-item">{{$book->book_review_link}}</li>
            <li class="list-group-item">{{$book->contributor}}</li>
            <li class="list-group-item">{{$book->contributor_note}}</li>
            <li class="list-group-item">{{$book->created_date}}</li>
            <li class="list-group-item">{{$book->description}}</li>
            <li class="list-group-item">{{$book->first_chapter_link}}</li>
            <li class="list-group-item">{{$book->price}}</li>
            <li class="list-group-item">{{$book->primary_isbn10}}</li>
            <li class="list-group-item">{{$book->primary_isbn13}}</li>
            <li class="list-group-item">{{$book->book_uri}}</li>
            <li class="list-group-item">{{$book->publisher}}</li>
            <li class="list-group-item">{{$book->rank}}</li>
            <li class="list-group-item">{{$book->rank_last_week}}</li>
            <li class="list-group-item">{{$book->sunday_review_link}}</li>
            <li class="list-group-item">{{$book->title}}</li>
            <li class="list-group-item">{{$book->updated_date}}</li>
            <li class="list-group-item">{{$book->weeks_on_list}}</li>
            <li class="list-group-item">{{$book->list_id}}</li>
        </ul>
        <a class="maintaining" href ="{{route('admin.lists')}}">Back to maintaining</a>
    </div>
@endsection
