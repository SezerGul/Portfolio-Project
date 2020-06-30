<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create()->each(function($user) {
            $user->posts()->saveMany(factory(Post::class, rand(1,3))->make());
        });
        
    }
}
