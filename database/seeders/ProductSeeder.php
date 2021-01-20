<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 100; $i++) { 
            $model = new Product;
            $model -> fill([
                'name' => $faker->name,
                'price' => $faker->numberBetween($min = 1000, $max = 10000000),
                'description' => $faker->realText(150, 2),
                'cate_id' => rand(1, 50),
                // 'views' => $faker->rand(1,100),
                
            ]);
            $model->save();
        }

    }
}
