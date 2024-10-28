<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receipt>
 */
class ReceiptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'         =>fake()->randomElement(['pamisa', 'pss', 'certificate', 'others']),
            'description'   =>fake()->word(),
            'amount'        =>fake()->numberBetween(50,100),
            'date_paid'     =>fake()->date(),
            'receivers_name'=>fake()->name(),
            'church_id'     =>11
        ];
    }
}
