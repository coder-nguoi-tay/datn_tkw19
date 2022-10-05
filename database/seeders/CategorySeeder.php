<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        Category::truncate();
        for ($i = 0; $i < 10; $i++) {
            $category = new Category();
            $category->category_name = $faker->name;
            $category->order_num = $i + 1;
            $category->save();
        }
    }
}
