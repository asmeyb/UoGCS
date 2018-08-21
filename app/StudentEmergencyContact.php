<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentEmergencyContact extends Model
{
    protected $fillable = ['studentId','fullName','relationship','email',
                            'phone','country','region','zone','woreda','kebele'];

    public function studentbiography()
    {
        return $this->belongsTo('App\StudentBioGraphy');
    }
}
