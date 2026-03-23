<?php

use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(App\Models\Church::class, function (Faker $faker) {
	$mycities = array(
		["cityname" => 31, "state" => 24],
		["cityname" => 24, "state" => 24],
		["cityname" => 32, "state" => 24],
		["cityname" => 12, "state" => 12],
		["cityname" => 15, "state" => 15],
		["cityname" => 33, "state" => 15],
	);

	$mycity = Arr::random($mycities);
	
    return [
        //
        'address'   => $faker->address,
        'city_id'   => $mycity['cityname'],
        'state_id'  => $mycity['state'],
        'pincode'   => $faker->postcode,
    ];
});