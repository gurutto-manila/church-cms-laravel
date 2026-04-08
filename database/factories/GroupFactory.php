<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Group;

class GroupFactory extends Factory
{
    protected $model = Group::class;

    public function definition(): array
    {
        return [
            'category_id' => fake()->numberBetween(1, 7),
            'name'        => fake()->sentence(3),
            'cover_image' => fake()->imageUrl(640, 480),
            'description' => fake()->text(),
            'group_type'  => fake()->randomElement([
                'common_interests',
                'everyone',
                'married_couples',
                'men',
                'women',
                'young_adults',
                'youth'
            ]),
        ];
    }
}