<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Baptismal;

class BaptismalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i < 11 ; $i++) {
            Baptismal::create([
                'book_number'           =>fake()->numerify('###-###'),
                'page_number'           =>fake()->numerify('###-###'),
                'serial_number'         =>fake()->numerify('###-###'),
                'parishioner_id'        =>$i,
                'officiating_clergy'    =>fake()->name(),
                'date_of_baptism'       =>fake()->date(),
                'church_id'             =>$i,
                'place_of_baptism'      =>fake()->address(),
            ]);
        }
    }
}
