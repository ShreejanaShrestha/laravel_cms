<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;
    //it is done to allow certain data to be inserted through create method
   
   protected $dates = ['deleted_at'];
    protected $fillable= ['title','content'];    //$fillable property is defined somewhere in model. it receives an array

}
