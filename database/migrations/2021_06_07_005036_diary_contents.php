<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DiaryContents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('diary_contents', function (Blueprint $table) {
            $table->increments('diarycontents_id'); 
            $table->string('diarycontents_weekday',55); 
            $table->string('diarycontents_work',55);  
            $table->string('diarycontents_content',55);
            $table->string('diarycontents_note',55);
            $table->string('diarycontents_teacher_comment',55);
            $table->string('diarycontents_trainer_comment',55);
            $table->integer('week_id');
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
        Schema::dropIfExists('diary_contents');
    }
}
