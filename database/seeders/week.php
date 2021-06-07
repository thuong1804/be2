<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class week extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            DB::table('week')->insert([
                
                'week_id' => random_int(1, 999999),
                'diary_id' =>   random_int(1, 999999),
                'week_weekdays' =>  random_int(1, 999999),
                'create_at' => date("Y-m-d H:i:s"),
                'end_at' =>  date("Y-m-d H:i:s"),
                'status_check' => Str::random(55),
                'status' => Str::random(55),
                
            ]);
        }
    }
}
