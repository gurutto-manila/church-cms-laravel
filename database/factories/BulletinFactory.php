<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Bulletin;
use App\Models\Church;

class BulletinFactory extends Factory
{
    protected $model = Bulletin::class;

    public function definition(): array
    {
        $i = Church::count();
        $name = 'Bulletin' . $i;

        $type = fake()->randomElement(['month', 'week']);
        $year = fake()->randomElement(['2016','2017','2018','2019']);

        if ($type == 'week') {
            $week = fake()->numberBetween(1, 52);
            $month = null;
        } else {
            $week = null;
            $month = fake()->numberBetween(1, 12);
        }

        return [
            'name'        => $name,
            'cover_image' => fake()->imageUrl(640, 480),
            'type'        => $type,
            'week'        => $week,
            'month'       => $month,
            'year'        => $year,
            'path'        => 'uploads/bulletin.pdf',
        ];
    }
}