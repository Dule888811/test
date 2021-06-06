<?php


namespace App\Repositories;


use App\Book;
use Illuminate\Http\Request;

class BookRepository implements BookRepositoriesInterface
{
   public function all()
   {
       $books = Book::all();
       return $books;
   }

   public function findById($id)
   {
       $book = Book::findOrFail($id);
       return $book;
   }

   public function destroy($id)
   {
       $book = $this->findById($id);
       $book->delete();
   }

   public function store(Request $request)
   {
      $book = new Book();
       $book->age_group = $request->age_group;
       $book->amazon_product_url = $request->amazon_product_url;
       $book->article_chapter_link = $request->article_chapter_link;
       $book->author = $request->author;
       $book->book_image = $request->book_image;
       $book->book_image_width = $request->book_image_width;
       $book->book_image_height = $request->book_image_height;
       $book->book_review_link = $request->book_review_link;
       $book->contributor = $request->contributor;
       $book->contributor_note = $request->contributor_note;
       $book->created_date = $request->created_date;
       $book->description = $request->description;
       $book->first_chapter_link = $request->first_chapter_link;
       $book->price = $request->price;
       $book->primary_isbn10 = $request->primary_isbn10;
       $book->primary_isbn13 = $request->primary_isbn13;
       $book->book_uri = $request->book_uri;
       $book->publisher = $request->publisher;
       $book->rank = $request->rank;
       $book->rank_last_week = $request->rank_last_week;
       $book->sunday_review_link = $request->sunday_review_link;
       $book->title = $request->title;
       $book->updated_date = $request->updated_date;
       $book->weeks_on_list = $request->weeks_on_list;
       $book->list_id = $request->list_id;
       $book->save();
   }

   public function update($id,Request $request)
   {
       $book = $this->findById($id);
       $book->age_group = $request->age_group;
       $book->amazon_product_url = $request->amazon_product_url;
       $book->article_chapter_link = $request->article_chapter_link;
       $book->author = $request->author;
       $book->book_image = $request->book_image;
       $book->book_image_width = $request->book_image_width;
       $book->book_image_height = $request->book_image_height;
       $book->book_review_link = $request->book_review_link;
       $book->contributor = $request->contributor;
       $book->contributor_note = $request->contributor_note;
       $book->created_date = $request->created_date;
       $book->description = $request->description;
       $book->first_chapter_link = $request->first_chapter_link;
       $book->price = $request->price;
       $book->primary_isbn10 = $request->primary_isbn10;
       $book->primary_isbn13 = $request->primary_isbn13;
       $book->book_uri = $request->book_uri;
       $book->publisher = $request->publisher;
       $book->rank = $request->rank;
       $book->rank_last_week = $request->rank_last_week;
       $book->sunday_review_link = $request->sunday_review_link;
       $book->title = $request->title;
       $book->updated_date = $request->updated_date;
       $book->weeks_on_list = $request->weeks_on_list;
       $book->list_id = $request->list_id;
       $book->update();
   }
}
