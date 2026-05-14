<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [

            ['category' => 'Web Design'],
            ['category' => 'Web Development'],
            ['category' => 'Online Marketing'],
            ['category' => 'Keyword Research'],
            ['category' => 'Email Marketing'],
        ];

        foreach($categories as $category){

            Category::create($category);
        }

    }
}
