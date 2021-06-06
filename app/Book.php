<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Book extends  Model
{
    protected $fillable = [
        'age_group', 'amazon_product_url', 'article_chapter_link','author','book_image','book_image_width','book_image_height',
        'book_review_link','contributor','contributor_note','created_date','description','first_chapter_link','price','primary_isbn10','primary_isbn13','book_uri',
        'publisher','rank','rank_last_week','sunday_review_link','title','updated_date','weeks_on_list','list_id',
    ];

    public function Buy_links(){
        return $this->hasMany('App\Buy_links');
    }

    public function List()
    {
        return $this->belongsTo('App\Lists');
    }
}
