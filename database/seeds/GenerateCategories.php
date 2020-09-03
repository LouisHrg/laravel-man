<?php

use Illuminate\Database\Seeder;

use App\Category;
use Faker\Factory;
use Illuminate\Support\Str;

class GenerateCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
          $category = new Category;
          $category->name = $faker->words(rand(2, 6), true);
          $category->slug = Str::of($category->name)->slug('-');
          $category->save();
        }
    }
}
