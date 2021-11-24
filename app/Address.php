<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    protected $fillable = [
        'user_id',
        'same_billing_shipping',
        'address_type',
        'name',
        'mobile',
        'company',
        'address'
    ];
}
