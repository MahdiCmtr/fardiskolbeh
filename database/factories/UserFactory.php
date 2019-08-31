<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'name' => $faker->name,
        'password' => bcrypt('12345'),
        'type' => User::STATE_NORMAL,
        'phone' => '09382509847',
        'avatar' => $faker->shuffleString(),
        'verified_at' => now(),
        'state' => 'enable'
    ];
});
