<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterRequest extends Model
{
       protected $fillable = [
        'name',
        'email',      
    ];
}
