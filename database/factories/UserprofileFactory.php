<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Models\Userprofile::class, function (Faker $faker) {
    
    $profession = $faker->randomElement(['business','doctor','home_maker','professionals','self_employed','student','others']);

    $date_of_birth = $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-2 years', $timezone = null);

    //$gender = $faker->randomElement(['male', 'female' , 'transgender']);
    $gender = $faker->randomElement(['male', 'female']);
    if($gender == 'male')
    {
        $avatar = "uploads/male.png";
    }
    elseif($gender == 'female')
    {
        $avatar = "uploads/female.png";
    }
    else
    {
        $avatar = "uploads/images.jpg";
    }

    $city = $faker->randomElement(['Bangalore' , 'Chennai' , 'Hyderabad' , 'Mumbai' , 'Thiruvananthapuram']);

    $city_id = $faker->randomElement(['12' , '24' , '25' , '15' , '13']);

    $state_id = $faker->randomElement(['12' , '24' , '25' ,  '15' , '13']);

    $membership_type = $faker->randomElement(['member', 'guest']);
    
    $was_baptized = $faker->randomElement(['yes', 'no']);
    
    if($was_baptized == 'yes')
    {
        $baptism_date = $faker->dateTimeBetween($startDate = '-29 years', $endDate = '-2 years', $timezone = null);
    }
    else
    {
        $baptism_date = null;
    }

    if($membership_type == 'member')
    {
        $membership_start_date = Carbon::now();
    }
    else
    {
        $membership_start_date = null;
    }
    //$aadhar_number = $faker->unique()->randomNumber($nbDigits = 12, $strict = false);

    $faker->addProvider(new \Faker\Provider\en_US\Text($faker));

    return [
        'firstname'                 => $faker->firstName,
        'lastname'                  => $faker->lastName,
        'profession'                => $profession,
        'date_of_birth'             => $date_of_birth, 
        'gender'                    => $gender, 
        'avatar'                    => $avatar, 
        'country_id'                => "7",
        'address'                   => $faker->address,
        'city_id'                   => $city_id,
        'state_id'                  => $state_id,
        'notes'                     => $faker->text,
        'membership_type'           => $membership_type,
        'membership_start_date'     => $membership_start_date,
        'was_baptized'              => $was_baptized,
        'baptism_date'              => $baptism_date,
        //'aadhar_number'             => $aadhar_number,
    ];
});