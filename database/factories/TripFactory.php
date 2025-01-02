<?php

namespace Database\Factories;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Factories\Factory;

class TripFactory extends Factory
{
    protected $model = Trip::class;

    public function definition()
    {
        return [
            'nazev' => $this->faker->sentence,
            'destinace' => $this->faker->city,
            'cena' => $this->faker->numberBetween(1000, 10000),
            'obrazek' => 'https://source.unsplash.com/random/640x480/?travel',
            'popis' => $this->faker->paragraph,
        ];
    }
}
