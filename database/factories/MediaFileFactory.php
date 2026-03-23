<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MediaFile;
use Faker\Generator as Faker;

$factory->define(MediaFile::class, function (Faker $faker) {

	$media_type = $faker->randomElement(['audio','video']);

	if($media_type == 'audio')
	{
		$type = $faker->randomElement(['attach','record']);
	}
	elseif($media_type == 'video')
	{
		$type = $faker->randomElement(['upload','url']);
	}

	if( ($type == 'attach') || ($type == 'record') )
	{
		$url_file = $faker->randomElement(['uploads/audio/1/2jcxhvgUGJOxCnzuYScjpg516fRgBrmRQE66L1al.mp3','uploads/audio/1/fJnlkF3qcrmueNd2JWcJGUOtgJwg71iI46k6ONaX.mp3','uploads/audio/1/LcSTNMjvjc0PwbIDJMuvZuQdxROIJbHHchfqhAQF.mp3','uploads/audio/1/6KmHtStIQsWF0AWdQTONTMrRlX3XKYm0VPASZ282.mp3','uploads/audio/1/N8ifCaI5t1nlR1rUGXAZZwhEAqNcJKlmc6VN0CHv.mp3']);
	}
	elseif($type == 'upload')
	{
		$url_file = $faker->randomElement(['uploads/video/1/17_02_2021_17_11_24_video.mp4','uploads/video/1/17_02_2021_17_14_39_video.mp4']);
	}
	elseif($type == 'url')
	{
		$url_file = 'https://www.youtube.com/watch?v=EngW7tLk6R8';
	}

    return [
        //
    	'media_type'	=>	$media_type,
    	'name'			=>	$faker->realText(rand(10,20)),
    	'description'	=>	$faker->text,
    	'type'			=>	$type,
    	'url'			=>	$url_file,
    ];
});