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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('profession',50);
            $table->text('description_1');
            $table->string('list_1',50);
            $table->string('list_2',50);
            $table->string('list_3',50);
            $table->string('list_4',50);
            $table->string('list_5',50);
            $table->string('list_6',50);
            $table->string('list_7',50);
            $table->string('list_8',50);
            $table->text('description_2');
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
        Schema::dropIfExists('abouts');
    }
};
