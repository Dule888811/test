<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Controllers\Controller;
use App\Lists;
use App\Repositories\BookRepositoriesInterface;
use App\Repositories\BookRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $_bookRepositories;

    public function __construct(BookRepositoryInterface $bookRepositories)
    {
      $this->_bookRepositories = $bookRepositories;
    }

    public function index()
    {
       $books = $this->_bookRepositories->all();
        return view('user.book.index')->with('books',$books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lists = Lists::all();
        return view('user.book.create')->with('lists',$lists);
    }

    public function BuyLinks($id)
    {
        $Buy_link = $this->_bookRepositories->BuyLinks($id);
        return view('user.book.buy_links')->with('Buy_links',$Buy_link);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'age_group' => 'string|nullable',
            'amazon_product_url' => 'required|url',
            'article_chapter_link' => 'string|nullable',
            'author' => 'required|string',
            'book_image' => 'required|uri',
            'book_image_width' => 'required|integer',
            'book_image_height' => 'required|integer',
            'book_review_link' => 'nullable|url',
            'contributor' => 'required|string',
            'contributor_note' => 'string|nullable',
            'created_date' => 'required|date_format:Y-m-d H:i:s',
            'description' => 'required|string',
            'first_chapter_link' => 'string|nullable',
            'price' => 'required|numeric',
            'primary_isbn10' => 'required|digits:10|numeric',
            'primary_isbn13' => 'required|digits:13|numeric',
            'book_uri' => 'required|string',
            'publisher' => 'required|string',
            'rank' => 'required|integer',
            'rank_last_week' => 'required|integer',
            'sunday_review_link' => 'url|nullable',
            'title' => 'required|string',
            'updated_date' => 'required|date_format:Y-m-d H:i:s',
            'weeks_on_list' => 'required|integer',
            'list_id' => 'required'
        ]);
        $this->_bookRepositories->store($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $book = $this->_bookRepositories->findById($id);
       return view('user.book.show')->with('book',$book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lists = Lists::all();
        $book = $this->_bookRepositories->findById($id);
        return view('user.book.edit')->with('book',$book)->with('lists',$lists);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $request->validate([
            'age_group' => 'string|nullable',
            'amazon_product_url' => 'required|url',
            'article_chapter_link' => 'string|nullable',
            'author' => 'required|string',
            'book_image' => 'required|url',
            'book_image_width' => 'required|integer',
            'book_image_height' => 'required|integer',
            'book_review_link' => 'nullable|url',
            'contributor' => 'required|string',
            'contributor_note' => 'string|nullable',
            'created_date' => 'required|date_format:Y-m-d H:i:s',
            'description' => 'required|string',
            'first_chapter_link' => 'string|nullable',
            'price' => 'required|numeric',
            'primary_isbn10' => 'required|digits:10|numeric',
            'primary_isbn13' => 'required|digits:13|numeric',
            'book_uri' => 'required|string',
            'publisher' => 'required|string',
            'rank' => 'required|integer',
            'rank_last_week' => 'required|integer',
            'sunday_review_link' => 'url|nullable',
            'title' => 'required|string',
            'updated_date' => 'required|date_format:Y-m-d H:i:s',
            'weeks_on_list' => 'required|integer',
            'list_id' => 'required'
        ]);
        $this->_bookRepositories->update($id,$request);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->_bookRepositories->destroy($id);
        return redirect()->back();
    }
}
