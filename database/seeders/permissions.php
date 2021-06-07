<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class permissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            DB::table('permissions')->insert([
                
                'permission_id' => random_int(1, 999999),
                'permission_name' =>  Str::random(55),
                'status' => Str::random(55),
                
            ]);
        }
    }
}
