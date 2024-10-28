<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date'          =>fake()->date(),
            'time_start'    =>fake()->time(),
            'time_end'      =>fake()->time(),
            'description'   =>fake()->word(),
            'church_id'     =>11
        ];
    }
}
