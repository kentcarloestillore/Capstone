<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Death;

class DeathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <11 ; $i++) {
            Death::create([
                'book_number'               =>fake()->numerify('###-###'),
                'page_number'               =>fake()->numerify('###-###'),
                'serial_number'             =>fake()->numerify('###-###'),
                'parishioner_id'            =>$i,
                'name_of_clergy'            =>fake()->name(),
                'partner_name'              =>fake()->name(),
                'church_id'                 =>$i,
                'date_of_death'             =>fake()->date(),
                'date_of_burial'            =>fake()->date(),
                'cause_of_death'            =>fake()->word(),
                'name_of_cemetery'          =>fake()->address(),
                'received_any_sacrament'    =>fake()->boolean()
            ]);
        }
    }
}
