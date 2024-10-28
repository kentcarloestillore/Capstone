<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Godparent;

class GodparentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <11 ; $i++) {
            for ($j=1; $j < 5; $j++) {
                Godparent::create([
                    'fullname'      =>fake()->name(),
                    'baptismal_id'  =>$i
                ]);
            }
        }
    }
}
