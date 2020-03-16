<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Posts::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'post_content' => Str::random(10),
        'post_title' => Str::random(10),
        'post_status'=> Str::random(10),
        'post_name'=> Str::random(10),
        'post_type'=> Str::random(10),
        'post_category'=> Str::random(10),
        'post_date'=> 16032020,

        /*'post_content' => $faker->paragraph,
        'post_title' => $faker->title,
        'post_status'=> Str::random(10),
        'post_name'=> $faker->name,
        'post_type'=> Str::random(10),
        'post_category'=> $faker->name,*/

    ];
});
