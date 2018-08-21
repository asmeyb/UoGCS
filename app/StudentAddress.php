<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StudentBioGraphy;

class StudentAddress extends Model
{
    protected $fillable = ['studentId','country','region','zone','woreda','kebele'];

    public function studentbiography()
    {
        return $this->belongsTo('App\StudentBioGraphy');
    }
}
