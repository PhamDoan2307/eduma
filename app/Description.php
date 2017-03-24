<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected $table='descriptions';
    protected $fillable=['description','language','level','total_duration','subject_id'];
    public function subjects()
    {
        return $this->belongsTo('App\Subject');
    }
}
