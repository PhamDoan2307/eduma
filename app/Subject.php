<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function description()
    {
        return $this->hasOne('App\Description');
    }

    public function curriculum()
    {
        return $this->hasMany('App\Curriculum');
    }

    public function instructor()
    {
        return $this->belongsToMany('App\Instructor','subject_instructors');

    }
    public function review()
    {
        return $this->hasOne('App\Review');
    }
}
