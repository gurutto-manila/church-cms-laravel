<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Carbon\Carbon;

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

$factory->define(App\Models\User::class, function (Faker $faker) {
    $name = $faker->unique()->userName;
    $email = $name.'@mailinator.com';
    return [
        'name'                      => $name,
        'email'                     => $email,
        'mobile_no'                 => $faker->unique()->randomNumber($nbDigits = 9, $strict = false),
        'password'                  => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'email_verification_code'   =>Str::random(40),
        //'email_verified'            => 1,
        //'email_verified_at'         => Carbon::now(),
        'remember_token'            => Str::random(10),
    ];
});