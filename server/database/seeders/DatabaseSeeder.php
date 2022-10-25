<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,100) as $index) {
            User::create([
                'name' => 'user ' . $index,
                'email' => 'user' . $index . '@gmaill.com',
                'password' => 'password123'
            ]);
        }

        foreach(range(1,100) as $index) {
            Post::create([
                'title' => 'title ' . $index,
                'content' => 'content' . $index . '@gmaill.com',
                'user_id' => $index
            ]);
        }
    }
}
