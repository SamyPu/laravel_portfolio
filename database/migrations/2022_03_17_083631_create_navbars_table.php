<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navbars', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->string('link_name');
            $table->string('icon_1');
            $table->string('link_icon1');
            $table->string('icon2');
            $table->string('link_icon2');
            $table->string('icon3');
            $table->string('link_icon3');
            $table->string('icon4');
            $table->string('link_icon4');
            $table->string('icon5');
            $table->string('link_icon5');
            $table->string('icon6');
            $table->string('name_icon6');
            $table->string('icon7');
            $table->string('name_icon7');
            $table->string('icon8');
            $table->string('name_icon8');
            $table->string('icon9');
            $table->string('name_icon9');
            $table->string('icon10');
            $table->string('name_icon10');
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
        Schema::dropIfExists('navbars');
    }
};
