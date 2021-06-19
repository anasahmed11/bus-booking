<?php

use Illuminate\Database\Seeder;

    class SubLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_lines')->truncate();

        DB::table('sub_lines')->insert(
            [
                'line_id' => 1,
                'start_station_id' => 1,
                'end_station_id' => 4,
            ]
        );

        DB::table('sub_lines')->insert(
            [
                'line_id' => 1,
                'start_station_id' => 2,
                'end_station_id' => 4,
            ]
        );

        DB::table('sub_lines')->insert(
            [
                'line_id' => 1,
                'start_station_id' => 3,
                'end_station_id' => 4,
            ]
        );

    }
}
