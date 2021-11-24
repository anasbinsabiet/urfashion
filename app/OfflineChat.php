<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfflineChat extends Model
{
    protected $table = 'offline_chat';
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'questions'
    ];
}
