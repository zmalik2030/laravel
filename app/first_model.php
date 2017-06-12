<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class first_model extends Model
{
    //
     protected $fillable = [
        'name', 
    ];
    protected $table="first";
    public $timestamps = false;

}
