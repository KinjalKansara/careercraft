<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admin";
    protected $primaryKey = "email";
    protected $keyType = "string";
    public $timestamps = "false";

    protected $fillable = 
    [ 
        'email',
        'password'
    ];
}
