<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Institution extends Model
{
   // use SoftDeletes;
    protected $fillable = ['name','description'];

   // protected $table = " ";
/**
 * get the user that create the institution
 */
//protected $dates = ['deleted_at'];

}