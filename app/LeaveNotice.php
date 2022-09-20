<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveNotice extends Model
{
    
                protected $fillable = [
        'id', 'status','start_date','end_date','any_message',
    ];
}
