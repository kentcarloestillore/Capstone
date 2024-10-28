<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Confirmation;

class ConfirmationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <11 ; $i++) {
            Confirmation::create([
                'book_number'               =>fake()->numerify('###-###'),
                'page_number'               =>fake()->numerify('###-###'),
                'serial_number'             =>fake()->numerify('###-###'),
                'parishioner_id'            =>$i,
                'officiating_clergy'        =>fake()->name(),
                'date_of_confirmation'      =>fake()->date(),
                'church_id'                 =>$i,
                'place_of_confirmation'     =>fake()->address(),
            ]);
        }
    }
}
