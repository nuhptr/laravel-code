<?php

namespace Database\Seeders;

use App\Models\Players;
use Illuminate\Database\Seeder;
use ManagersTables;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // TODO : register each seeder
        $this->call([
            StadiumsTableSeeder::class,
            ClubsTableSeeder::class,
            ManagersTableSeeder::class,
            PlayersTableSeeder::class,
            MatchesTableSeeder::class
        ]);
    }
}
