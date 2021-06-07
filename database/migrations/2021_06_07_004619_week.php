<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Week extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('week', function (Blueprint $table) {
            $table->increments('week_id');
            $table->integer('diary_id');
            $table->integer('week_weekdays'); 
            $table->dateTimeTz('create_at', $precision = 0);
            $table->dateTimeTz('end_at', $precision = 0);
            $table->string('status_check',55); 
            $table->string('status',55);   

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
        Schema::dropIfExists('week');
    }
}
