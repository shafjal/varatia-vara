<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankUser extends Model
{
                    protected $fillable = [
        'id', 'banks_id','user_id','trxid','amount','withdraw'
    ];
}
