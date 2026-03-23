<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(App\Models\Fund::class, function (Faker $faker) 
{
	$faker->addProvider(new \Faker\Provider\kk_KZ\Company($faker));
	$faker->addProvider(new \Faker\Provider\ms_MY\Payment($faker));

	$authorised_at = $faker->dateTimeBetween('-365 days', '+1 days');

    $membership = $faker->randomElement(['guest','member']);

    $user = User::ByRole(5)->pluck('id')->toArray();
    
    $amount = $faker->numberBetween($min = 100, $max = 9000);

    $method = $faker->randomElement(['card','cash','cheque','demanddraft']);

    $comments = $faker->text($maxNbChars = 200);

    if($membership=='member')
    {
        $user_id = $faker->randomElement($user);;
    }
    else
    {
    	$data = [];

        $data['first_name']		=	$faker->unique()->firstName;
        $data['last_name']		=	$faker->unique()->lastName;
        $data['address']		=	$faker->unique()->address;
       	$data['mobile_number']	=	$faker->unique()->randomNumber($nbDigits = 9, $strict = false);
   	}
   	$payment_details = [];
   	if($method == 'cheque')
    {
        $payment_details['cheque_number'] 	= $faker->unique()->randomNumber($nbDigits = 6, $strict = false);
        $payment_details['account_number'] 	= $faker->businessIdentificationNumber;
        $payment_details ['payee_name'] 	= $faker->name; 
    }
    elseif($method=='card')
    {
        $payment_details['card_name']	= $faker->creditCardType;
        $payment_details['bank_name'] 	= $faker->bank;
    }
    elseif($method=='demanddraft')
    {
        $payment_details['payable_at'] 		= $faker->city;
        $payment_details['account_number']	= $faker->businessIdentificationNumber;
    }

    return [
        //
    	'authorised_at'		=>	$authorised_at,
        'membership' 		=> 	$membership,
        'user_id'			=>	$user_id,
        'data'				=>	$data,
        'amount'			=>	$amount,
        'method'			=>	$method,
        'payment_details'	=>	$payment_details,
        'uuid'				=>	uniqid(),
    ];
});