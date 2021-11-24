<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    public function category(){
        return $this->belongsTo(HelpCategory::class,'category_id','id');
    }
}