<?php

use Faker\Generator as Faker;

$factory->define(App\Models\EventGallery::class, function (Faker $faker) {
	return [
    	'path' => $faker->imageUrl($width = 640, $height = 480),
    ];
});