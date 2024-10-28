<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Church;

class ChurchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Church::factory(10)->create();

        Church::create([
            'name_of_church'        => 'Saint Isidore Farmer Parish',
            'address'               => 'San Isidro Bohol',
            'name_of_priest'        => 'John Carlo Rasonabe',
            'priest_contact_number' => '509-246-558'
        ]);
    }
}
