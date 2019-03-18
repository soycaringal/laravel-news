<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	 protected $hidden = ['created_at', 'updated_at', 'news_id'];
    public function news()
    {
        return $this->belongsTo('App\News');
    }
}
