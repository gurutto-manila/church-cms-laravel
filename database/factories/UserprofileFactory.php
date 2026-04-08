<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use App\Models\Userprofile;

class UserprofileFactory extends Factory
{
    protected $model = Userprofile::class;

    public function definition(): array
    {
        $profession = fake()->randomElement([
            'business','doctor','home_maker','professionals','self_employed','student','others'
        ]);

        $date_of_birth = fake()->dateTimeBetween('-30 years', '-2 years');

        $gender = fake()->randomElement(['male', 'female']);

        if ($gender == 'male') {
            $avatar = "uploads/male.png";
        } else {
            $avatar = "uploads/female.png";
        }

        $city_id = fake()->randomElement(['12','24','25','15','13']);
        $state_id = fake()->randomElement(['12','24','25','15','13']);

        $membership_type = fake()->randomElement(['member', 'guest']);
        $was_baptized = fake()->randomElement(['yes', 'no']);

        $baptism_date = $was_baptized == 'yes'
            ? fake()->dateTimeBetween('-29 years', '-2 years')
            : null;

        $membership_start_date = $membership_type == 'member'
            ? Carbon::now()
            : null;

        return [
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'profession' => $profession,
            'date_of_birth' => $date_of_birth,
            'gender' => $gender,
            'avatar' => $avatar,
            'country_id' => 7,
            'address' => fake()->address(),
            'city_id' => $city_id,
            'state_id' => $state_id,
            'notes' => fake()->text(),
            'membership_type' => $membership_type,
            'membership_start_date' => $membership_start_date,
            'was_baptized' => $was_baptized,
            'baptism_date' => $baptism_date,
        ];
    }
}