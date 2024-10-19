<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archievement extends Model
{
    protected $table = "archievement";
    
    protected $fillable = 
    [
        'archievement',
        'email'
    ];
}
