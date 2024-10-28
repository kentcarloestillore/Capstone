<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PSS>
 */
class PSSFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'member_id'     =>fake()->numberBetween(1,5),
            'date_paid'     =>fake()->date(),
            'amount'        =>20,
            'month'         =>fake()->randomElement(['January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',]),
            'year'          =>'2024'
        ];
    }
}
