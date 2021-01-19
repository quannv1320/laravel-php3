<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 50; $i++) { 
            $item = [
                'name' => $faker->name,
                'detail' => $faker->realText(50,1)
            ];
            $data[] = $item;
            DB::table('categories')->insert($item);
        }
    }
}
