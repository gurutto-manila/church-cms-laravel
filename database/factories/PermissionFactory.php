<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Permission::class, function (Faker $faker) {
    return [
        //
    	'created_at' 	=> date("Y-m-d H:i:s"),
        'updated_at'	=> date("Y-m-d H:i:s"), 
    ];
});
