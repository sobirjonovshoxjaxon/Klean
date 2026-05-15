<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Category;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [

            ['tag' => 'Design'],
            ['tag' => 'Development'],
            ['tag' => 'Marketing'],
            ['tag' => 'SEO'],
            ['tag' => 'Writing'],
            ['tag' => 'Consulting'],
        ];

        foreach($tags as $tag){

            Tag::create($tag);
        }
    }
}
