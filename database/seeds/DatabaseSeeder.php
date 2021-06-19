<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UserSeeder::class);
        $this->call(BusSeeder::class);
        $this->call(BusSeatSeeder::class);
        $this->call(StationSeeder::class);
        $this->call(LineSeeder::class);
        $this->call(StopSeeder::class);
        $this->call(SubLineSeeder::class);
        $this->call(SubLineStopSeeder::class);
        $this->call(TripSeeder::class);
        $this->call(TicketSeeder::class);

    }
}
