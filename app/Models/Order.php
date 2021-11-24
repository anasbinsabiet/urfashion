<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\PaymentMethod;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    public function orderDetails(){
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }

    public function payment(){
        return $this->belongsTo(PaymentMethod::class,'payment_method','id');
    }
}
