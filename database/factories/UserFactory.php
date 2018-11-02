<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'username' => $faker->unique()->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'billing_address' => $faker->address,
        'referral_code' => str_random(50),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Teacher::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'username' => $faker->unique()->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'billing_address' => $faker->address,
        'referral_code' => str_random(50),
        'remember_token' => str_random(10),
    ];
});
