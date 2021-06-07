<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class diaries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            DB::table('diaries')->insert([
                
                'diary_id' => random_int(1, 999999),
                'diary_name' =>  Str::random(55),
                'user_id' =>  random_int(1, 999999),          
                'status' => Str::random(55),
                
            ]);
        }
    }
}
