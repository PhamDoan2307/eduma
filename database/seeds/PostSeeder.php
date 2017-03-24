<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0;$i<20;$i++){
            \App\Post::create([
                    'title' => $faker->sentence(6),
                    'slug' => str_slug($faker->sentence(6)),
                    'avatar' => 'sample.jpg',
                    'content'=>$faker->paragraph(100),
                    'user_id'=>1,
                    'post_category_id'=>1
            ]);
        }
    }
}
