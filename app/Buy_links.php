<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Buy_links extends Model
{
    protected $fillable = [
        'name', 'url',
    ];

    public function Book()
    {
        return $this->belongsTo('App\Book');
    }
}
