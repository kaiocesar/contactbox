<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'activity' => $faker->name,
        'mobile' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'created_at' => now(),
        'last_contact' => now(),
        'status' => true,
    ];
});
