<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $guarded = [];
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
