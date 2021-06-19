<?php

use Illuminate\Database\Seeder;

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lines')->truncate();
        DB::table('lines')->insert(
            [
                'start_station' => 1,
                'end_station' => 4,
            ]
        );
    }
}
