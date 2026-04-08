<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        $name = $this->faker->unique()->userName;
        $email = $name . '@mailinator.com';

        return [
            'name' => $name,
            'email' => $email,
            'mobile_no' => $this->faker->unique()->randomNumber(9, false),
            'password' => bcrypt('password'),
            'email_verification_code' => Str::random(40),
            'remember_token' => Str::random(10),

            // ⚠️ ADD THESE ONLY IF YOUR TABLE REQUIRES THEM:
            // 'church_id' => 1,
            // 'usergroup_id' => 3,
            // 'status' => 'active',
        ];
    }
}