<?php

use Illuminate\Database\Seeder;

class SubLineStopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_line_stops')->truncate();

        DB::table('sub_line_stops')->insert(
            [
                'sub_lines_id' => 1,
                'stop_id' => 1,
            ]
        );

        DB::table('sub_line_stops')->insert(
            [
                'sub_lines_id' => 1,
                'stop_id' => 2,
            ]
        );

        DB::table('sub_line_stops')->insert(
            [
                'sub_lines_id' => 1,
                'stop_id' => 3,
            ]
        );

        DB::table('sub_line_stops')->insert(
            [
                'sub_lines_id' => 1,
                'stop_id' => 4,
            ]
        );

        DB::table('sub_line_stops')->insert(
            [
                'sub_lines_id' => 2,
                'stop_id' => 2,
            ]
        );

        DB::table('sub_line_stops')->insert(
            [
                'sub_lines_id' => 2,
                'stop_id' => 3,
            ]
        );

        DB::table('sub_line_stops')->insert(
            [
                'sub_lines_id' => 2,
                'stop_id' => 4,
            ]
        );

        DB::table('sub_line_stops')->insert(
            [
                'sub_lines_id' => 3,
                'stop_id' => 3,
            ]
        );

        DB::table('sub_line_stops')->insert(
            [
                'sub_lines_id' => 3,
                'stop_id' => 3,
            ]
        );

        DB::table('sub_line_stops')->insert(
            [
                'sub_lines_id' => 3,
                'stop_id' => 4,
            ]
        );

    }
}
