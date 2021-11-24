<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImprintArtworkOption extends Model
{
    protected $table = 'imprint_artwork_options';
    protected $fillable = [
        'user_id',
        'product_id',
        'order_id',
        'imprint_artwork_option',
        'imprintline1',
        'imprintline2',
        'imprintline3',
        'imprintline4',
        'theFile',
        'imprint_comment'
    ];
}