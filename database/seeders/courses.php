<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class courses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            DB::table('courses')->insert([
                
                'course_id' => random_int(1, 999999),
                'course_semester' =>  Str::random(55),
                'course_name' =>  Str::random(55),
                'course_year' => random_int(1, 999999) ,
                'status' => Str::random(55),
                
            ]);
        }
    }
}
