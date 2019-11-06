<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title','content','author'
    ];

    public function comments(){
        return $this->hasMany('App\Comment','article_id');
    }


    public function img_article(){
  
	    if (file_exists( public_path() . '/images/article/' . $this->article_image) && $this->article_image !=null ) {
	        return '/images/article/' . $this->article_image;
	    } else {
	        return  url('/img/def-up.jpg');
	    }     
	}
}
