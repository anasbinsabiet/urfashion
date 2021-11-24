<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Color;
use App\PackagingOption;

class OrderDetail extends Model
{
    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function color(){
        return $this->belongsTo(Color::class,'item_color','id');
    }
    public function packaging(){
        return $this->belongsTo(PackagingOption::class,'packaging_option','id');
    }

}
