<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StudentAddress;
use App\StudentEmergencyContact;
use App\StudentGradeInformation;

class StudentBioGraphy extends Model
{
    protected $fillable = ['firstName','secondName','lastName','birthDate','gender','martialStatus'];

    public function studentaddress()
    {
        return $this->hasMany('App\StudentAddress');
    }

    public function studentEmergencyContact()
    {
        return $this->hasMany('App\StudentEmergencyContact');
    }

    public function studentGradeInformation()
    {
        return $this->hasMany('StudentGradeInformation');
    }
}
