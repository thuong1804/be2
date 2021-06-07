<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class diary_contents extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            DB::table('diary_contents')->insert([
                
                'diarycontents_id' => random_int(1, 999999),
                'week_id' => random_int(1, 999999),
                'diarycontents_content' =>  Str::random(55),
                'diarycontents_trainer_comment' =>  Str::random(55),
                'diarycontents_teacher_comment' =>  Str::random(55),
                'diarycontents_weekday' =>   random_int(1, 999999),
                'diarycontents_work' =>  Str::random(55),
                'diarycontents_note' =>  Str::random(55),
                'status' => Str::random(55),
                
            ]);
        }
    }
}
