<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Sermon::class, function (Faker $faker) {

	$cover_image   = $faker->imageUrl($width = 640, $height = 480);
	$title         = $faker->realText(rand(10,20));
	$description   = $faker->realText(rand(40,50));

	 return [ 

	 'title'       => $title,
     'description' => $description,
     'cover_image' => $cover_image,
    


    ];
});