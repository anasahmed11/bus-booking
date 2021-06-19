<?php

use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trips')->truncate();
        DB::table('trips')->insert(
            [
                'line_id' => 1,
                'bus_id' => 1,
                'take_off_date'=>'2021-06-20 01:35:00',
                'arrival_date'=>'2021-06-20 11:35:28'
            ]
        );


    }
}
