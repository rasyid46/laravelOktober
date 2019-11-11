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
        //cek file exist di floder tempat file imgae 
	    if (file_exists( public_path() . '/images/article/' . $this->article_image) && $this->article_image !=null ) {
            //jika ada tampilkan imgae hasil upload
	        return '/images/article/' . $this->article_image;
	    } else {
            // jika tidak ada tampilkan gambar default
	        return  url('/img/def-up.jpg');
	    }     
	}
}
