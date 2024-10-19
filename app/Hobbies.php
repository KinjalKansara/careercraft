<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobbies extends Model
{
    protected $table = "hobbies";
    
    protected $fillable = 
    [
        'hobbies',
        'email'
    ];
}
