<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['name','code','description',];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
    public function zones()
    {
        return $this->hasMany('App\Zone');
    }  

}
