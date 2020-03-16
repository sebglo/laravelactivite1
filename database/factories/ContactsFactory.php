<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        //
        'contact_name' => $faker->name,
        'contact_email' => $faker->unique()->safeEmail,
        'contact_message' => $faker->paragraph,
        'contact_date'=> $faker->date,
    ];
});
