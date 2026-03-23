<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Help;
use Faker\Generator as Faker;

$factory->define(Help::class, function (Faker $faker) {
    return [
        //
    	'title'				=>	$faker->realText(rand(10,20)),
    	'description'		=>	$faker->text,
    	'contact_details'	=>	$faker->unique()->randomNumber($nbDigits = 9, $strict = false),
    ];
});
