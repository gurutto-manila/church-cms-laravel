<?php

use Faker\Generator as Faker;

$factory->define(App\Models\SermonLink::class, function (Faker $faker) {

	$type     = $faker->randomElement(['audio','video','document']);
	$location = $faker->randomElement(['Amaravati' , 'Bengaluru' , 'Thiruvananthapuram' , 'Chennai' , 'Hyderabad' , 'Mumbai']);
	$date     = $faker->dateTime($max = 'now', $timezone = null);
	

	if($type == 'document')
	{
		$url = public_path('/uploads/file.pdf');
	}
	else
	{
		$url      = $faker->mimeType;
	}

	 return [
	 'type'     => $type,
	 'location' => $location,
     'date'     => $date,
     'url'      => $url,
     


    ];
});