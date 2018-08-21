<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentGradeInformation extends Model
{
    protected $fillable = ['studentId','admitType','category','grade','section'];

    public function studentbiography()
    {
        return $this->belongsTo('App\StudentBioGraphy');
    }
}
