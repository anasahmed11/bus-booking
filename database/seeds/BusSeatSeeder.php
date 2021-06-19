<?php

use Illuminate\Database\Seeder;

class BusSeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bus_seats')->truncate();
        for($i=0;$i<12;$i++){
            DB::table('bus_seats')->insert(
                [
                    'bus_id' => 1
                ]
            );
        }


    }
}
