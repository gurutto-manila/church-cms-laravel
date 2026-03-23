<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Group::class, function (Faker $faker) {
	$faker->addProvider(new \Faker\Provider\en_US\Text($faker));

	$category_id = $faker->numberBetween($min=1,$max=7);
	$name = $faker->sentence($nbWords = 3, $variableNbWords = true);
	$cover_image = $faker->imageUrl($width = 640, $height = 480);
	$description = $faker->text;
	$group_type = $faker->randomElement(['common_interests','everyone','married_couples','men','women','young_adults','youth']);
    return [
    	'category_id' 	=> $category_id,
    	'name' 			=> $name,
    	'cover_image' 	=> $cover_image,
    	'description' 	=> $description,
    	'group_type' 	=> $group_type,
    ];
});
