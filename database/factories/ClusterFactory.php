<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cluster>
 */
class ClusterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cluster_number'    =>fake()->numberBetween(1,10),
            'cluster_leader'    =>fake()->name(),
            'chapel_id'         =>1
        ];
    }
}
