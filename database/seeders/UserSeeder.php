<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            
            'name' => 'Shoxjaxon',
            'password' => '87654321',
            'image' => 'user-photos/14.jpg',
            'email' => 'shoxjaxonsobirjonov77@gmail.com',
        ]);

        User::factory()->count(5)->create();

    }
}
