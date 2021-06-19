<?php

use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buses')->truncate();
        DB::table('buses')->insert(
            [
                'bus_license' => 'ts_1234',
            ]
        );



    }
}
