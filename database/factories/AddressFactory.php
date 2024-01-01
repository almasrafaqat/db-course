<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'number'     => $this->faker->numberBetween(1,10),
           'street'     => $this->faker->streetName,
           'user_id'    => $this->faker->unique()->numberBetween(1,3),
        ];
    }
}
