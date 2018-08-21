<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name','code','description'];
    
     public function regions()
     {
         return $this->hasMany('App\Region');
     }
}
