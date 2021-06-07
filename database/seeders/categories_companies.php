<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class categories_companies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            DB::table('categories_companies')->insert([
                
                'company_id' => random_int(1, 999999),
                'categori_name' => Str::random(55),
                
            ]);
        }
    }
}
