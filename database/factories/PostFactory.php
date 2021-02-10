<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'category_id' => $faker->numberBetween($min = 1, $max = 10),
        'title' => $faker->sentence($nbWords = 4),
        'author' => $faker->name()
    ];
});
