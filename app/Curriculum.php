<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    //
    protected $table='curriculum';
    protected $fillable=['title','slug','duration','subject_id','order'];

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
