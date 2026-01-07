<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create posts for existing users
        $users = \App\Models\User::all();

        if ($users->count() > 0) {
            \App\Models\Post::factory(20)->recycle($users)->create();
        } else {
            \App\Models\Post::factory(20)->create();
        }
    }
}
