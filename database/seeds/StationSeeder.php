<?php

use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stations')->truncate();
        DB::table('stations')->insert(
            [
                'name' => 'Alexandria',
            ]
        );
        DB::table('stations')->insert(
            [
                'name' => 'Giza',
            ]
        );
        DB::table('stations')->insert(
            [
                'name' => 'Cairo',
            ]
        );
        DB::table('stations')->insert(
            [
                'name' => 'AlMinya',
            ]
        );

    }
}
