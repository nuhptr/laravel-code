<?php

declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\Matches;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matches = [
            [
                "clubs_id"      => 1,
                "rivals_id"     => 2,
                "schedule"      => "2021-08-25 00:00:00",
                "created_at"    => "2021-06-11 00:00:00",
                "updated_at"    => "2021-06-11 00:00:00"
            ],
            [
                "clubs_id"      => 2,
                "rivals_id"     => 1,
                "schedule"      => "2021-08-25 00:00:00",
                "created_at"    => "2021-06-11 00:00:00",
                "updated_at"    => "2021-06-11 00:00:00"
            ],
            [
                "clubs_id"      => 3,
                "rivals_id"     => 4,
                "schedule"      => "2021-08-25 00:00:00",
                "created_at"    => "2021-06-11 00:00:00",
                "updated_at"    => "2021-06-11 00:00:00"
            ],
            [
                "clubs_id"      => 4,
                "rivals_id"     => 3,
                "schedule"      => "2021-08-25 00:00:00",
                "created_at"    => "2021-06-11 00:00:00",
                "updated_at"    => "2021-06-11 00:00:00"
            ],
             [
                'clubs_id'      => 5,
                'rivals_id'     => 6,
                'schedule'      => '2021-08-25 00:00:00',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 6,
                'rivals_id'     => 5,
                'schedule'      => '2021-08-25 00:00:00',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
        ];

        Matches::insert($matches);
    }
}
