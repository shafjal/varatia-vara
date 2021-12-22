<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role_user extends Model
{
        protected $fillable = [
        'id', 'role_id', 'user_id',
    ];
}
