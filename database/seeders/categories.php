<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            DB::table('categories')->insert([
                
               
                'categori_name' => Str::random(55),
                
            ]);
        }
    }
   
}
