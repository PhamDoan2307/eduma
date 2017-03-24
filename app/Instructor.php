<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{

    protected $table = 'instructors';
    protected $fillable = ['name', 'avatar', 'whishlist', 'slug', 'facebook', 'twitter', 'gmail', 'youtube', 'job', 'description'];
    public function subject()
    {

        return $this->belongsToMany('App\Subject', 'subject_instructors');

    }

}
