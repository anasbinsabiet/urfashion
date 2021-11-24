<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('item_color')->nullable();
            $table->bigInteger('total_items');
            $table->bigInteger('small')->nullable();
            $table->bigInteger('medium')->nullable();
            $table->bigInteger('large')->nullable();
            $table->bigInteger('axal')->nullable();
            $table->bigInteger('twoxl')->nullable();
            $table->bigInteger('threexl')->nullable();
            $table->bigInteger('fourxl')->nullable();

            $table->string('left_chest')->nullable();
            $table->integer('left_chest_no_of_imprint_color')->nullable();
            $table->integer('left_chest_imprint_color_1')->nullable();
            $table->integer('left_chest_imprint_color_2')->nullable();
            $table->integer('left_chest_imprint_color_3')->nullable();
            $table->integer('left_chest_imprint_color_4')->nullable();
            $table->integer('left_chest_imprint_color_5')->nullable();
            $table->integer('left_chest_imprint_color_6')->nullable();
            $table->integer('left_chest_imprint_color_7')->nullable();
            $table->integer('left_chest_imprint_color_8')->nullable();

            $table->string('full_front')->nullable();
            $table->integer('full_front_no_of_imprint_color')->nullable();
            $table->integer('full_front_imprint_color_1')->nullable();
            $table->integer('full_front_imprint_color_2')->nullable();
            $table->integer('full_front_imprint_color_3')->nullable();
            $table->integer('full_front_imprint_color_4')->nullable();
            $table->integer('full_front_imprint_color_5')->nullable();
            $table->integer('full_front_imprint_color_6')->nullable();
            $table->integer('full_front_imprint_color_7')->nullable();
            $table->integer('full_front_imprint_color_8')->nullable();

            $table->string('full_back')->nullable();
            $table->integer('full_back_no_of_imprint_color')->nullable();
            $table->integer('full_back_imprint_color_1')->nullable();
            $table->integer('full_back_imprint_color_2')->nullable();
            $table->integer('full_back_imprint_color_3')->nullable();
            $table->integer('full_back_imprint_color_4')->nullable();
            $table->integer('full_back_imprint_color_5')->nullable();
            $table->integer('full_back_imprint_color_6')->nullable();
            $table->integer('full_back_imprint_color_7')->nullable();
            $table->integer('full_back_imprint_color_8')->nullable();

            $table->string('right_sleeve')->nullable();
            $table->integer('right_sleeve_no_of_imprint_color')->nullable();
            $table->integer('right_sleeve_imprint_color_1')->nullable();
            $table->integer('right_sleeve_imprint_color_2')->nullable();
            $table->integer('right_sleeve_imprint_color_3')->nullable();
            $table->integer('right_sleeve_imprint_color_4')->nullable();
            $table->integer('right_sleeve_imprint_color_5')->nullable();
            $table->integer('right_sleeve_imprint_color_6')->nullable();
            $table->integer('right_sleeve_imprint_color_7')->nullable();
            $table->integer('right_sleeve_imprint_color_8')->nullable();

            $table->integer('packaging_option')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('email_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
