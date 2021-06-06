@extends('layouts.app')
@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif
    <form method="POST" action="{{route('admin.book.update',['id' => $book->id])}}">
            @csrf
        <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="form-group">
                <label for="age_group">age group</label>
                <input type="text" value="{{$book->age_group}}" class="form-control" name="age_group" id="age_group">
            </div>
            <div class="form-group">
                <label for="amazon_product_url">amazon product url</label>
                <input type="text" value="{{$book->amazon_product_url}}"  class="form-control" name="amazon_product_url" id="amazon_product_url"  required>
            </div>
            <div class="form-group">
                <label for="article_chapter_link">article chapter link</label>
                <input type="text" value="{{$book->article_chapter_link}}" class="form-control" name="article_chapter_link" id="article_chapter_link" >
            </div>
            <div class="form-group">
                <label for="author">author</label>
                <input type="text" value="{{$book->author}}" class="form-control" name="author" id="author"  required>
            </div>
            <div class="form-group">
                <label for="book_image">book image</label>
                <input type="text" value="{{$book->book_image}}" class="form-control" name="book_image" id="book_image"  required>
            </div>
            <div class="form-group">
                <label for="book_image_width">book image width</label>
                <input type="text" value="{{$book->book_image_width}}" class="form-control" name="book_image_width" id="book_image_width"  required>
            </div>
            <div class="form-group">
                <label for="book_image_height">book image height</label>
                <input type="text" value="{{$book->book_image_height}}" class="form-control"name="book_image_height" id="book_image_height"  required>
            </div>
            <div class="form-group">
                <label for="book_review_link">book review link</label>
                <input type="text" value="{{$book->book_review_link}}" class="form-control" name="book_review_link" id="book_review_link">
            </div>
            <div class="form-group">
                <label for="contributor">contributor</label>
                <input type="text" value="{{$book->contributor}}" class="form-control" name="contributor" id="contributor"  required>
            </div>
            <div class="form-group">
                <label for="contributor_note">contributor note</label>
                <input type="text" value="{{$book->contributor_note}}" class="form-control" name="contributor_note" id="contributor_note">
            </div>
            <div class="form-group">
                <label for="created_date">created date</label>
                <input type="text" value="{{$book->created_date}}" class="form-control" name="created_date" id="created_date"  required>
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <input type="text" value="{{$book->description}}" class="form-control" name="description" id="description"  required>
            </div>
            <div class="form-group">
                <label for="first_chapter_link">first chapter link</label>
                <input type="text" value="{{$book->first_chapter_link}}" class="form-control" name="first_chapter_link" id="first_chapter_link">
            </div>
            <div class="form-group">
                <label for="price">price</label>
                <input type="text" value="{{$book->price}}" class="form-control" name="price" id="price"  required>
            </div>
            <div class="form-group">
                <label for="primary_isbn10">primary isbn10</label>
                <input type="text" value="{{$book->primary_isbn10}}" class="form-control" name="primary_isbn10" id="primary_isbn10"  required>
            </div>
            <div class="form-group">
                <label for="primary_isbn13">primary isbn13</label>
                <input type="text" value="{{$book->primary_isbn13}}" class="form-control" name="primary_isbn13" id="primary_isbn13"  required>
            </div>
            <div class="form-group">
                <label for="book_uri">book uri</label>
                <input type="text" value="{{$book->book_uri}}" class="form-control" name="book_uri" id="book_uri"  required>
            </div>
            <div class="form-group">
                <label for="publisher">publisher</label>
                <input type="text" value="{{$book->publisher}}" class="form-control" name="publisher" id="publisher"  required>
            </div>
            <div class="form-group">
                <label for="rank">rank</label>
                <input type="text" value="{{$book->rank}}" class="form-control" name="rank" id="rank"  required>
            </div>
            <div class="form-group">
                <label for="rank_last_week">rank last week</label>
                <input type="text" value="{{$book->rank_last_week}}" class="form-control" name="rank_last_week" id="rank_last_week"  required>
            </div>
            <div class="form-group">
                <label for="sunday_review_link">sunday review link</label>
                <input type="text" value="{{$book->sunday_review_link}}" class="form-control" name="sunday_review_link" id="sunday_review_link">
            </div>
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" value="{{$book->title}}" class="form-control" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="updated_date">updated date</label>
                <input type="text" value="{{$book->updated_date}}" class="form-control" name="updated_date" id="updated_date">
            </div>
            <div class="form-group">
                <label for="weeks_on_list">weeks on list</label>
                <input type="text" value="{{$book->weeks_on_list}}" class="form-control" name="weeks_on_list" id="weeks_on_list">
            </div>
            <label for="cars">Choose a list:</label>
            <select name="list_id" id="list_id">
                @foreach($lists as $list)
                    <option value="{{$list->list_id}}">{{$list->list_name}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    <a class="maintaining" href ="{{route('admin.lists')}}">Back to maintaining</a>
@endsection
