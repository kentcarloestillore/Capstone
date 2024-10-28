<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marriage;

class MarriageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <11 ; $i++) {
            Marriage::create([
                'book_number'           =>fake()->numerify('###-###'),
                'page_number'           =>fake()->numerify('###-###'),
                'serial_number'         =>fake()->numerify('###-###'),
                'husband_id'            =>$i,
                'wife_id'               =>$i+10,
                'name_of_clergy'        =>fake()->name(),
                'church_id'             =>$i,
                'date_of_marriage'      =>fake()->date(),
                'place_of_marriage'     =>fake()->address(),
                'name_of_church'        =>fake()->address(),
            ]);
        }
    }
}
