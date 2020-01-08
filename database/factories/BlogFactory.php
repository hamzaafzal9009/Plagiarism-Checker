<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'user_id' => random_int(2,6),
        'b_title' => $faker->name,
        'b_content' => $faker->paragraph,
        'b_thumbnail' => Str::random(10) . '.png',
        'b_slug' => $faker->name,
        'b_img' => Str::random(10) . '.png'
    ];
});
