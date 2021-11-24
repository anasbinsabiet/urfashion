<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    protected $fillable = ['name', 'parent_id', 'slug', 'default_image'];
}
