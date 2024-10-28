<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chapel;

class ChapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chapel::create([
            'name_of_chapel'    => 'Cantabon',
            'address'           => 'San Isidro Bohol',
            'chapel_treasurer'  => 'John Carlo Rasonabe',
            'chapel_chairman'   => 'James Mante',
            'church_id'         => 11
        ]);
    }
}
