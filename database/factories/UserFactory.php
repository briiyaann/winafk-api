<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Core\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'username' => $faker->unique()->userName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'birthday' => $faker->dateTime(),
        'avatar' => $faker->imageUrl(),
        'coins' => 0,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'user_role' => random_int(1, 3),
        'verification_code' => null,
        'verification_created' => null,
        'remember_token' => Str::random(10),
    ];
});
