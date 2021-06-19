<?php

use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->truncate();
        DB::table('tickets')->insert(
            [
                'trip_id' => 1,
                'seat_no' => 1,
                'user_id'=>1,
                'sub_line_id'=>3
            ]
        );

        DB::table('tickets')->insert(
            [
                'trip_id' => 1,
                'seat_no' => 2,
                'user_id'=>1,
                'sub_line_id'=>3
            ]
        );

        DB::table('tickets')->insert(
            [
                'trip_id' => 1,
                'seat_no' => 3,
                'user_id'=>1,
                'sub_line_id'=>3
            ]
        );

        DB::table('tickets')->insert(
            [
                'trip_id' => 1,
                'seat_no' => 4,
                'user_id'=>1,
                'sub_line_id'=>3
            ]
        );

        DB::table('tickets')->insert(
            [
                'trip_id' => 1,
                'seat_no' => 5,
                'user_id'=>2,
                'sub_line_id'=>1
            ]
        );

        DB::table('tickets')->insert(
            [
                'trip_id' => 1,
                'seat_no' => 6,
                'user_id'=>3,
                'sub_line_id'=>2
            ]
        );


    }
}
