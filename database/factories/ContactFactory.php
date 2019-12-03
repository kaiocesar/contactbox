<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'id' => '1',
        'name' => $faker->name,
        'activity' => $faker->name,
        'mobile' => $faker->mobileNumber,
        'email' => $faker->unique()->safeEmail,
        'create_at' => now(),
        'last_contact' => now(),
        'status' => true,
    ];
});
