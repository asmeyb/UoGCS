<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
        'name',
        'institution',
        'campus',
        'building',
        'roomNumber',
    ];
}

