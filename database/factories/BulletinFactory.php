<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Bulletin::class, function (Faker $faker) {
	$i = \App\Models\Church::count();
	$name = 'Bulletin'.$i;
	$cover_image = $faker->imageUrl($width = 640, $height = 480);
	$type = $faker->randomElement(['month', 'week']);
	$year = $faker->randomElement(['2016','2017','2018', '2019']);
	$path = "uploads/bulletin.pdf";

	if($type == 'week')
	{
		$week = $faker->numberBetween($min = 01, $max = 52);
		$month = null;
	}
	else
	{
		$week = null;
		$month = $faker->numberBetween($min = 01, $max = 12);  
	}

    return [
        //
    'name' 			=> $name,
    'cover_image' 	=> $cover_image,
    'type'			=> $type,
    'week' 			=> $week,
    'month' 		=> $month,
    'year' 			=> $year,
    'path' 			=> $path,
    ];
});
