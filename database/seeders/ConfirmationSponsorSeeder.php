<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ConfirmationSponsor;


class ConfirmationSponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i < 11 ; $i++) {
            for ($j=1; $j < 5 ; $j++) {
                ConfirmationSponsor::create([
                    'fullname'          =>fake()->name(),
                    'confirmation_id'   =>$i
                ]);
            }
        }
    }
}
