<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
            protected $fillable = [
        'id', 'bank_name','accountHolder_name','account_number','chq_number', 'atmCard_number',
    ];
}
