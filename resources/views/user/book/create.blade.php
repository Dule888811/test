@extends('layouts.app')
@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif
    <form method="POST" action="{{route('user.book.store')}}">
        <form>
            @csrf
            <div class="form-group">
                <label for="age_group">age group</label>
                <input type="text" class="form-control" name="age_group" id="age_group" aria-describedby="emailHelp" placeholder="Enter age group">
            </div>
            <div class="form-group">
                <label for="amazon_product_url">amazon product url</label>
                <input type="text"  class="form-control" name="amazon_product_url" id="amazon_product_url" placeholder="amazon product url" required>
            </div>
            <div class="form-group">
                <label for="article_chapter_link">article chapter link</label>
                <input type="text" class="form-control" name="article_chapter_link" id="article_chapter_link" placeholder="article chapter link">
            </div>
            <div class="form-group">
                <label for="author">author</label>
                <input type="text" class="form-control" name="author" id="author" placeholder="author" required>
            </div>
            <div class="form-group">
                <label for="book_image">book image</label>
                <input type="text" class="form-control" name="book_image" id="	book_image" placeholder="book image" required>
            </div>
            <div class="form-group">
                <label for="book_image_width">book image width</label>
                <input type="text" class="form-control" name="book_image_width" id="book_image_width" placeholder="book image width" required>
            </div>
            <div class="form-group">
                <label for="book_image_height">book image height</label>
                <input type="text" class="form-control"name="book_image_height" id="book_image_height" placeholder="book image height" required>
            </div>
            <div class="form-group">
                <label for="book_review_link">book review link</label>
                <input type="text" class="form-control" name="book_review_link" id="book_review_link" placeholder="book review link">
            </div>
            <div class="form-group">
                <label for="contributor">contributor</label>
                <input type="text" class="form-control" name="contributor" id="contributor" placeholder="contributor" required>
            </div>
            <div class="form-group">
                <label for="contributor_note">contributor note</label>
                <input type="text" class="form-control" name="contributor_note" id="contributor_note" placeholder="contributor note">
            </div>
            <div class="form-group">
                <label for="created_date">created date</label>
                <input type="text" class="form-control" name="created_date" id="created_date" placeholder="yyyy-mm-dd hh:mm:ss" required>
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="description" required>
            </div>
            <div class="form-group">
                <label for="first_chapter_link">first chapter link</label>
                <input type="text" class="form-control" name="first_chapter_link" id="first_chapter_link" placeholder="first chapter link">
            </div>
            <div class="form-group">
                <label for="price">price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="price" required>
            </div>
            <div class="form-group">
                <label for="primary_isbn10">primary isbn10</label>
                <input type="text" class="form-control" name="primary_isbn10" id="primary_isbn10" placeholder="primary isbn10" required>
            </div>
            <div class="form-group">
                <label for="primary_isbn13">primary isbn13</label>
                <input type="text" class="form-control" name="primary_isbn13" id="primary_isbn13" placeholder="primary isbn13" required>
            </div>
            <div class="form-group">
                <label for="book_uri">book uri</label>
                <input type="text" class="form-control" name="book_uri" id="book_uri" placeholder="book uri" required>
            </div>
            <div class="form-group">
                <label for="publisher">publisher</label>
                <input type="text" class="form-control" name="publisher" id="publisher" placeholder="publisher" required>
            </div>
            <div class="form-group">
                <label for="rank">rank</label>
                <input type="text" class="form-control" name="rank" id="rank" placeholder="rank" required>
            </div>
            <div class="form-group">
                <label for="rank_last_week">rank last week</label>
                <input type="text" class="form-control" name="rank_last_week" id="rank_last_week" placeholder="rank last week" required>
            </div>
            <div class="form-group">
                <label for="sunday_review_link">sunday review link</label>
                <input type="text" class="form-control" name="sunday_review_link" id="sunday_review_link" placeholder="sunday review link">
            </div>
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="title">
            </div>
            <div class="form-group">
                <label for="updated_date">updated date</label>
                <input type="text" class="form-control" name="updated_date" id="updated_date" placeholder="yyyy-mm-dd hh:mm:ss">
            </div>
            <div class="form-group">
                <label for="weeks_on_list">weeks on list</label>
                <input type="text" class="form-control" name="weeks_on_list" id="weeks_on_list" placeholder="weeks on
                list">
            </div>
            <label for="cars">Choose a list:</label>

            <select name="list_id" id="list_id">
                @foreach($lists as $list)
                    <option value="{{$list->list_id}}">{{$list->list_name}}</option>
                 @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </form>
    <a class="maintaining" href ="{{route('user.books')}}">Back to maintaining</a>

@endsection
