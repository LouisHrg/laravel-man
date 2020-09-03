<?php

use Illuminate\Database\Seeder;

use App\Post;
use App\Category;
use App\User;
use Faker\Factory;

class GeneratePosts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
          $post = new Post;
          $post->title = $faker->words(rand(2, 6), true);
          $post->content = $faker->sentence(10, true);
          $post->published_at = now();
          $post->category_id = Category::inRandomOrder()->first()->id;
          $post->user_id = User::inRandomOrder()->first()->id;
          $post->save();
        }
    }
}
