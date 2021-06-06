<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Lists extends  Model
{
    protected $fillable = [
        'list_id','list_name', 'list_name_encoded', 'display_name','updated','list_image','list_image_width','list_image_height',
    ];
    public  $primary_key = 'list_id';
    public function Books(){
        return $this->hasMany('App\Book');
    }
}
