<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAdmission extends Model
{
    protected $fillable = ['id', 'firstName', 'middleName',	'lastName', 'birthDate', 'birthPlace','sex', 'motherTongue',	'photo', 'studentCountry', 'studentRegion',	'studentZone', 'studentWoreda', 'studentKebele', 'studentEmergencyFullName',	'studentEmergencyAddress', 'studentEmergencyRelation','studentEmergencyEmail',	'studentEmergencyPhone'];        
    
    public function getStudentPhoto($photo)
    {
        return asset($photo);
    }
}
