<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description', 'image', 'user_id', 'post_category_id'];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function post_category()
    {
    	return $this->belongsTo('App\PostCategory');
    }
}
