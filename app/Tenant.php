<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Tenant extends Model
{
        use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
    protected $fillable = [
        'id', 'name','fathers_name','e_name', 'e_address', 'e_relation', 'e_phone',
        'maritial_status', 'address', 'date_of_b', 'phone', 'nid' , 'education', 'job_title',
        'job_location', 'religious', 'country','apartment_id','floor_number',
    ];
}
