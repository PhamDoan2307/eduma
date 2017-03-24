<?php

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
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
            \App\Subject::create([
                'name' => $faker->sentence(6),
                'slug' => str_slug($faker->sentence(6)),
                'avatar' => 'sample.jpg',
                'content'=>$faker->paragraph(100),
                'price'=>$faker->numberBetween(100000,999999),
                'category_id'=>1,
                'numberOfEnroll'=>$faker->numberBetween(10,99)
            ]);
        }
    }
}
