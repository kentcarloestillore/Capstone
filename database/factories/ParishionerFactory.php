<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parishioner>
 */
class ParishionerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname'          =>fake()->name(),
            'residence'         =>fake()->address(),
            'date_of_birth'     =>fake()->date(),
            'place_of_birth'    =>fake()->date(),
            'sex'               =>fake()->randomElement(['Male', 'Female']),
            'citizenship'       =>fake()->word(),
            'name_of_father'    =>fake()->name(),
            'name_of_mother'    =>fake()->name(),
            'church_id'         =>fake()->numberBetween(1,10)
        ];
    }
}
