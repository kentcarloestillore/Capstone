<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Church>
 */
class ChurchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_of_church'            =>fake()->address(),
            'address'                   =>fake()->address(),
            'name_of_priest'            =>fake()->name(),
            'priest_contact_number'     =>fake()->numerify('###-###-###')
        ];
    }
}
