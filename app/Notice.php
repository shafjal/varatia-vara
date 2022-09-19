<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
                protected $fillable = [
        'id', 'topic_name','topic_body',
    ];
}
