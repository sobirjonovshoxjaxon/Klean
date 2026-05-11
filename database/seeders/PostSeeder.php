<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Post::factory()->count(15)->create();


        // Bu pastdagi kod Seederda bitta post yaratish yo'li 
        // Post::create([

        //     'title' =>   'Sobirjonov Shoxjaxon',

        //     'image' => 'post-photos/spark.jpg',

        //     'short_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae distinctio iusto incidunt ratione earum vero!',

        //     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ipsum delectus, saepe consequatur, aut repudiandae magnam nam facere veniam dolores repellendus culpa porro animi deserunt!',
            
        //     'user_id' => 1,
        // ]);
    }
}


