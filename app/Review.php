<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table='reviews';

    protected $fillable=['star','total','width','subject_id'];
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
