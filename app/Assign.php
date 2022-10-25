<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{
        protected $fillable = [
        'id', 'user_id','apartment_id','floor_number','rent', 
    ];
}
