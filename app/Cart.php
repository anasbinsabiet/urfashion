<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{   
    protected $table = 'carts';
    protected $fillable = [
        'product_id',
        'item_color',
        'total_items',
        'small',
        'medium',
        'large',
        'axal',
        'twoxl',
        'threexl',
        'fourxl',
        'left_chest',
        'left_chest_no_of_imprint_color',
        'left_chest_imprint_color_1',
        'left_chest_imprint_color_2',
        'left_chest_imprint_color_3',
        'left_chest_imprint_color_4',
        'left_chest_imprint_color_5',
        'left_chest_imprint_color_6',
        'left_chest_imprint_color_7',
        'left_chest_imprint_color_8',
        'full_front',
        'full_front_no_of_imprint_color',
        'full_front_imprint_color_1',
        'full_front_imprint_color_2',
        'full_front_imprint_color_3',
        'full_front_imprint_color_4',
        'full_front_imprint_color_5',
        'full_front_imprint_color_6',
        'full_front_imprint_color_7',
        'full_front_imprint_color_8',
        'full_back',
        'full_back_no_of_imprint_color',
        'full_back_imprint_color_1',
        'full_back_imprint_color_2',
        'full_back_imprint_color_3',
        'full_back_imprint_color_4',
        'full_back_imprint_color_5',
        'full_back_imprint_color_6',
        'full_back_imprint_color_7',
        'full_back_imprint_color_8',
        'right_sleeve',
        'right_sleeve_no_of_imprint_color',
        'right_sleeve_imprint_color_1',
        'right_sleeve_imprint_color_2',
        'right_sleeve_imprint_color_3',
        'right_sleeve_imprint_color_4',
        'right_sleeve_imprint_color_5',
        'right_sleeve_imprint_color_6',
        'right_sleeve_imprint_color_7',
        'right_sleeve_imprint_color_8',
        'packaging_option',
        'user_id',
        'email_address'
    ];
}



            
