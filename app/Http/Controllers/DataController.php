<?php


namespace App\Http\Controllers;


use App\Book;
use App\Buy_links;
use App\Lists;
use Illuminate\Database\Eloquent\Model;

class DataController extends Controller
{
    public function index()
    {
        header('Content-type: application/json');
        $string = ( file_get_contents('../../test/response.txt'));
        $php = json_decode($string);
        $lists = $php->results->lists;
        foreach($lists as $list)
        {
            $newList = new Lists();
            $newList->list_id = $list->list_id;
            $newList->list_name = $list->list_name;
            $newList->list_name_encoded = $list->list_name_encoded;
            $newList->display_name = $list->display_name;
            $newList->updated = $list->updated;
            $newList->list_image = $list->list_image;
            $newList->list_image_width = $list->list_image_width;
            $newList->list_image_height = $list->list_image_height;
            $newList->save();
            $books = $list->books;
            foreach($books as $book)
            {
                $newBook = new Book();
                $newBook->age_group = $book->age_group;
                $newBook->amazon_product_url = $book->amazon_product_url;
                $newBook->article_chapter_link = $book->article_chapter_link;
                $newBook->author = $book->author;
                $newBook->book_image = $book->book_image;
                $newBook->book_image_width = $book->book_image_width;
                $newBook->book_image_height = $book->book_image_height;
                $newBook->book_review_link = $book->book_review_link;
                $newBook->contributor = $book->contributor;
                $newBook->contributor_note = $book->contributor_note;
                $newBook->created_date = $book->created_date;
                $newBook->description = $book->description;
                $newBook->first_chapter_link = $book->first_chapter_link;
                $newBook->price = $book->price;
                $newBook->primary_isbn10 = $book->primary_isbn10;
                $newBook->primary_isbn13 = $book->primary_isbn13;
                $newBook->book_uri = $book->book_uri;
                $newBook->publisher = $book->publisher;
                $newBook->rank = $book->rank;
                $newBook->rank_last_week = $book->rank_last_week;
                $newBook->sunday_review_link = $book->sunday_review_link;
                $newBook->title = $book->title;
                $newBook->updated_date = $book->updated_date;
                $newBook->weeks_on_list = $book->weeks_on_list;
                $newBook->list_id = $list->list_id;
                $newBook->save();
                $buy_links = $book->buy_links;
                foreach ($buy_links as $buy_link)
                {
                    $newBuy_links = new Buy_links();
                    $newBuy_links->name = $buy_link->name;
                    $newBuy_links->url = $buy_link->url;
                    $newBuy_links->book_id = $newBook->id;
                    $newBuy_links->save();
                }
            }
        }


    }
}
