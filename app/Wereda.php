<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wereda extends Model
{
    protected $fillable = ['country_id','region_id','name','code','zone','description','user_id'];

    public function zone()
    {
        return $this->hasOne('App\zone');
    }

    public function region()
    {
        return $this->hasOne('App\region');
    }

    public function country()
    {
        return $this->hasOne('App\country');
    }
}
