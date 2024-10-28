<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chapel>
 */
class ChapelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_of_chapel'    =>'Cantabon',
            'address'           =>fake()->address(),
            'chapel_treasurer'  =>fake()->name(),
            'chapel_chairman'   =>fake()->address(),
            'church_id'         =>11,
        ];
    }
}
