<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = "registration";
    protected $primaryKey = "email";
    protected $keyType = "string";
    public $timestamps = "false";

    protected $fillable = 
    [
        'email',
        'password',
        'dob'
    ];
}
