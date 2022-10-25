<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
       protected $fillable = [
        'id', 'user_id','apartment_id','phone','apartment_name', 'floor_number', 'rent_amount_fixed', 'rent_amount',
    ];
}
