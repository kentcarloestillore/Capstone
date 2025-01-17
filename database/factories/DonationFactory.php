<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donation>
 */
class DonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'          =>fake()->name(),
            'date_donated'  =>fake()->date(),
            'amount'        =>fake()->numberBetween(50,100),
            'remarks'       =>fake()->word(),
            'church_id'     =>11
        ];
    }
}
