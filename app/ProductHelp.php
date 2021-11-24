<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductHelp extends Model
{
    protected $table = 'product_help';
    protected $fillable = [
        'product_id',
        'email',
        'mobile',
        'questions'
    ];
}
