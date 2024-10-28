<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        $this->call(ChurchSeeder::class);
        $this->call(ParishionerSeeder::class);
        $this->call(BaptismalSeeder::class);
        $this->call(ConfirmationSeeder::class);
        $this->call(DeathSeeder::class);
        $this->call(MarriageSeeder::class);
        $this->call(GodparentSeeder::class);
        $this->call(ConfirmationSponsorSeeder::class);
        $this->call(MarriageSponsorSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ReceiptSeeder::class);
        $this->call(ChapelSeeder::class);
        $this->call(ClusterSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(PSSSeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(PamisaSeeder::class);
        $this->call(DonationSeeder::class);

        $user = User::create([
            'name'     => 'kentcarloestillore',
            'username' => 'admin',
            'password' => '123456789',
            'church_id'=> 11
            // 'remember_token' => Str::random(10),
        ]);

        $user2 = User::create([
            'name'     => 'jamesmante',
            'username' => 'staff',
            'password' => '123456789',
            'church_id'=> 11
            // 'remember_token' => Str::random(10),
        ]);

        $user->assignRole('DioceseAdmin');
        $user2->assignRole('ParishAdmin');
    }
}
