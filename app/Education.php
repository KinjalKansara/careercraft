<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = "education";
    
    protected $fillable = 
    [
        'degree',
        'city',
        'institute1',
        'passyear',
        'email'
    ];
}
