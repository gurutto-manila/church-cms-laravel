<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PrayerRequest;
use Faker\Generator as Faker;

$factory->define(PrayerRequest::class, function (Faker $faker) {
    return [
        //
    	'title'			=>	$faker->realText(rand(10,20)),
    	'description'	=>	$faker->text,
    	'date'			=>	$faker->dateTimeThisYear($max = 'now', $timezone = null),
    ];
});