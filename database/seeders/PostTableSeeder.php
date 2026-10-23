<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // for ($i = 1; $i <= 10; $i++) {
        //     Post::create([
        //         'title' => 'Post Title ' . $i,
        //         'description' => 'Description for Post ' . $i,
        //     ]);
        // }
        $faker = \Faker\Factory::create();
        for ($i = 1; $i <= 25; $i++){
           Post::create([
               'title' => $faker->sentence(),
               'description' => $faker->paragraph(),
           ]);
        }
    }
}
