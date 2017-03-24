<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded=[];
    public function post_category(){
        return $this->belongsTo(PostCategory::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(PostCategory::class,'post_category_id');
    }
}
