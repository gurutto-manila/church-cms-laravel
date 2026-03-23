<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Photos::class, function (Faker $faker) {

	$path = $faker->imageUrl($width = 640, $height = 480);


	 return [
    'path' => $path,


    ];
});