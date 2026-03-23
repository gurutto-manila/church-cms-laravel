<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Gallery::class, function (Faker $faker) {

	$path = $faker->imageUrl($width = 640, $height = 480);
	$name = $faker->realText(rand(10,20));
	
	 return [
	 'name'=> $name,
     'path' => $path,
     'updated_by' =>"1",
     


    ];
});