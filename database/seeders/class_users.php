<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class class_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            DB::table('class_users')->insert([
                
                'user_id' => random_int(1, 999999),
                'class_id' => random_int(1, 999999),
                'teacher_id' => random_int(1, 999999),
                'status' => Str::random(55),
                
            ]);
        }
    }
}
