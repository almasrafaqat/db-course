<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'path'              => $this->faker->imageUrl(),
            'imageable_id'      => $this->faker->numberBetween(1,3),
            'imageable_type'    => $this->faker->randomElement(['App\Models\User', 'App\Models\City']),        
        ];
    }
}
