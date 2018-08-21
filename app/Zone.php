<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = ['country_id','region_id','name','code','description','user_id'];


    public function region()
    {
        return $this->hasOne('App\Region');
    }
    public function woredas()
    {
        return $this->hasMany('App\Woreda');
    }
}
