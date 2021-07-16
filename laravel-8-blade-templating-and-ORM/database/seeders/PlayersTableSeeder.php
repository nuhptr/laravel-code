<?php

declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\Players;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $players = [
            [
                'clubs_id'      => 1,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p165153.png',
                'name'          => 'Timo Werner',
                'height'        => '180',
                'Position'      => 'Forward',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 1,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p184341.png',
                'name'          => 'Mason Mount',
                'height'        => '178',
                'Position'      => 'Midfielder',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 2,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p184029.png',
                'name'          => 'Martin Ødegaard',
                'height'        => '178',
                'Position'      => 'Midfielder',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 2,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p182539.png',
                'name'          => 'Dani Ceballos',
                'height'        => '179',
                'Position'      => 'Midfielder',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 3,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p106760.png',
                'name'          => 'Luke Shaw',
                'height'        => '185',
                'Position'      => 'Defender',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 3,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p141746.png',
                'name'          => 'Bruno Fernandes',
                'height'        => '179',
                'Position'      => 'Midfielder',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 4,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p121160.png',
                'name'          => 'Ederson',
                'height'        => '188',
                'Position'      => 'Goalkeeper',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 4,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p103025.png',
                'name'          => 'Riyard Mahrez',
                'height'        => '179',
                'Position'      => 'Forward',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 5,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p194634.png',
                'name'          => 'Diogo Jota',
                'height'        => '178',
                'Position'      => 'Forward',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 5,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p97032.png',
                'name'          => 'Virgil van Dijk',
                'height'        => '193',
                'Position'      => 'Defender',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 6,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p36903.png',
                'name'          => 'Gareth Bale',
                'height'        => '185',
                'Position'      => 'Forward',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 6,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p199249.png',
                'name'          => 'Sergio Reguilon',
                'height'        => '178',
                'Position'      => 'Defender',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
        ];

        Players::insert($players);
    }
}
