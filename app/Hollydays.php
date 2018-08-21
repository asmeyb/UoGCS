<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hollydaytypes;

class Hollydays extends Model
{
    protected $fillable = ['type','name','theday'];

    public function hollydaytype()
    {
        return $this->hasOne('App\Hollydaytypes');
    }
}
