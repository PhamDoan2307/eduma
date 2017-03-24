<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectInstructor extends Model
{
    //
    protected $table='subject_instructors';
    protected $fillable=['subject_id','instructor_id'];
    public $timestamps=false;
}
