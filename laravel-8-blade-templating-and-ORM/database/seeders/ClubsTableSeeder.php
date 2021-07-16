<?php

declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\Clubs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clubs =[
            [
                "stadiums_id"   => "1",
                "name"          => "Chelsea FC",
                "logo"          => "https://resources.premierleague.com/premierleague/badges/t8.svg",
                "url"           => "www.chelseafc.com",
                "thropy"        => 19,
                "created_at"    => "2021-06-11 00:00:00",
                "updated_at"    => "2021-06-11 00:00:00"
            ],
            [
                
                "stadiums_id"   => "2",
                "name"          => "Arsenal FC",
                "logo"          => "https://resources.premierleague.com/premierleague/badges/t3.svg",
                "url"           => "www.arsenal.com",
                "thropy"        => 8,
                "created_at"    => "2021-06-11 00:00:00",
                "updated_at"    => "2021-06-11 00:00:00"
            ],
            [
                
                "stadiums_id"   => "3",
                "name"          => "Manchester United",
                "logo"          => "https://resources.premierleague.com/premierleague/badges/t1.svg",
                "url"           => "www.manutd.com",
                "thropy"        => 20,
                "created_at"    => "2021-06-11 00:00:00",
                "updated_at"    => "2021-06-11 00:00:00"
            ],
            [
                
                "stadiums_id"   => "4",
                "name"          => "Manchester City",
                "logo"          => "https://resources.premierleague.com/premierleague/badges/t43.svg",
                "url"           => "www.mancity.com",
                "thropy"        => 12,
                "created_at"    => "2021-06-11 00:00:00",
                "updated_at"    => "2021-06-11 00:00:00"
            ],
            [
                
                "stadiums_id"   => "5",
                "name"          => "Liverpool FC",
                "logo"          => "https://resources.premierleague.com/premierleague/badges/t14.svg",
                "url"           => "www.liverpoolfc.com",
                "thropy"        => 11,
                "created_at"    => "2021-06-11 00:00:00",
                "updated_at"    => "2021-06-11 00:00:00"
            ],
            [
                
                "stadiums_id"   => "6",
                "name"          => "Tottenham Hotspur",
                "logo"          => "https://resources.premierleague.com/premierleague/badges/t6.svg",
                "url"           => "www.tottenhamhotspur.com",
                "thropy"        => 1,
                "created_at"    => "2021-06-11 00:00:00",
                "updated_at"    => "2021-06-11 00:00:00"
            ]
        ];

        Clubs::insert($clubs);
    }
}
