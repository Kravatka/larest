<?php

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Factory as FakFactory;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        $faker = FakFactory::create();

        for ($i = 0; $i < 50; $i++) {
            Article::create([
               'title' => $faker->sentence,
               'body'  => $faker->paragraph
            ]);
        }
    }
}
