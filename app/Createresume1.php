<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Createresume1 extends Model
{
    protected $table = "createresume1";
    public $timestamps = "false";

    protected $fillable = 
    [
        'fnaame', 
        'lname',
        'phone',
        'address',
        'zip',
        'city',
        'dob',
        'placedob',
        'license',
        'gender',
        'nationality',
        'maritalsts'
    ];
}
