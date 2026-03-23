<?php

use Faker\Generator as Faker;

$factory->define(App\Models\PermissionUser::class, function (Faker $faker) {
    return [
        //
    	'user_type' 	=> "App\Models\User",
    	'created_at' 	=> date("Y-m-d H:i:s"),
        'updated_at'	=> date("Y-m-d H:i:s"),
    ];
});
