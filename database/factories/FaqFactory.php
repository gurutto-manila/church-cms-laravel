<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Faq;
use Faker\Generator as Faker;

$factory->define(Faq::class, function (Faker $faker) {
    return [
        //
    	'question'	=>	$faker->text($maxNbChars = 150),
    	'answer'	=>	$faker->paragraphs($nbSentences = 6, $variableNbSentences = true),
    ];
});