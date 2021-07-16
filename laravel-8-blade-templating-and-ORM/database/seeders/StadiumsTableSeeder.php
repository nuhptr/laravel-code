<?php

declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\Stadiums;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StadiumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stadiums = [
            [
                "name"          => "Stamford Bridge",
                "capacity"      => 40000,
                "address"       => "Stamford Bridge, Fulham Road, London, SW6 1HS",
                "created_at"    => "2021-06-11 00:00:00",
                "updated_at"    => "2021-06-11 00:00:00",
            ],
                [
                "name"          => "Emirates Stadium",
                "capacity"      => 60000,
                "address"       => "Heighbury House, 75 Drayton Park, London, N5 1BU",
                "created_at"    => "2021-06-11 00:00:00",
                "updated_at"    => "2021-06-11 00:00:00",
            ],
                [
                "name"          => "Old Traffod",
                "capacity"      => 74000,
                "address"       => "Sir Matt Busby Way. Old Traffod, Manchester, M16 0RA",
                "created_at"    => "2021-06-11 00:00:00",
                "updated_at"    => "2021-06-11 00:00:00",
            ],            
                [
                "name"          => "Etihad Stadium",
                "capacity"      => 55000,
                "address"       => "Etihad Stadium, Etihad Campus, Manchester, L4 0TH",
                "created_at"    => "2021-06-11 00:00:00",
                "updated_at"    => "2021-06-11 00:00:00",
            ],
                [
                "name"          => "Anfield",
                "capacity"      => 53000,
                "address"       => "Anfield, Anfield Road, Liverpool, L4 0TH",
                "created_at"    => "2021-06-11 00:00:00",
                "updated_at"    => "2021-06-11 00:00:00",
            ],
                [
                "name"          => "Tottenham Hotspur Stadium",
                "capacity"      => 62000,
                "address"       => "Lilywhite House, 782 High Road, Tottenham, London, N17 0BX",
                "created_at"    => "2021-06-11 00:00:00",
                "updated_at"    => "2021-06-11 00:00:00",
            ],
        ];

        Stadiums::insert($stadiums);
    }
}
