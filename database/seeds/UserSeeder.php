<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert(
            [
                'name' => 'anas',
                'email'=>'anas.akid7@gmail.com',
                'password'=>bcrypt('12345678'),
                'phone'=>'01096884717',
                'type'=>'1'

            ]
        );

        DB::table('users')->insert(
            [
                'name' => 'ahmed',
                'email'=>'ahmed@gmail.com',
                'password'=>bcrypt('12345678'),
                'phone'=>'01112743895',
                'type'=>'1'

            ]
        );

        DB::table('users')->insert(
            [
                'name' => 'mohamed',
                'email'=>'mohamed@gmail.com',
                'password'=>bcrypt('12345678'),
                'phone'=>'01096884616',
                'type'=>'1'

            ]
        );


    }
}
