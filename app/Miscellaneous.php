<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Miscellaneous extends Model
{
                   protected $fillable = [
        'id', 'apartment_id','user_id',
        'task_name', 'apartment_floor','will_amount',
    ];
}
