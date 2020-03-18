<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {

    return [
        'user_id' => factory(\App\User::class),
        'post_content' => $faker->paragraph,
        'post_title' => $faker->sentence,
        'post_status'=> Str::random(10),
        //'post_name'=> $faker->name,
        'post_type'=> Str::random(10),
        'post_category'=> Str::random(10),
        'post_date'=> $faker->date,
    ];
});
