<?php

use Illuminate\Database\Seeder;

class StopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stops')->truncate();

        DB::table('stops')->insert(
            [
                'line_id' => 1,
                'station_id' => 1,
            ]
        );

        DB::table('stops')->insert(
            [
                'line_id' => 1,
                'station_id' => 2,
            ]
        );
        DB::table('stops')->insert(
            [
                'line_id' => 1,
                'station_id' => 3,
            ]
        );
        DB::table('stops')->insert(
            [
                'line_id' => 1,
                'station_id' => 4,
            ]
        );

    }
}
