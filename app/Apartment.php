<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
        protected $fillable = [
        'id', 'apartment_name','total_flat','apartment_address','apartmant_image',
    ];
}
