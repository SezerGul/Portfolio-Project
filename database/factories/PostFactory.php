<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(3, 6)), "."),
        'body' => $faker->paragraphs(rand(4, 8), true),
        'views' => rand(0, 25),
        'comments' => rand(0,7)
    ];
});
