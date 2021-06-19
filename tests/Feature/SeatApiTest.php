<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SeatApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFullList()
    {
        // run seeder to insert all  data
        $this->seed();

        //available seat api
        $response = $this->get('/api/available-seats?trip_id=1&start_station=Alexandria&end_station=AlMinya');

        //ensure that status code ==200
        $response->assertStatus(200);

        //ensure that basic objects are returned from api
        $response->assertJson([
            "success"=> true,
            "response_code"=> 200,
            "message"=> "list loaded successfully",
        ]);

        $json = $response->json();

        //ensure that api after our case returned only 6 seats
        $this->assertEquals(6, count($json['data']));

        //ensure that the first available seat on our case == 7

        $this->assertEquals(7, $json['data'][0]['id']);


    }

    public function testEmptyList()
    {
        // run seeder to insert all  data
        $this->seed();

        //no trip from alex to giza
        $response = $this->get('/api/available-seats?trip_id=1&start_station=Alexandria&end_station=Giza');

        //ensure that status code ==200
        $response->assertStatus(200);

        //ensure that basic objects are returned from api
        $response->assertJson([
            "success"=> false,
            "response_code"=> 500,
            "message"=> "not found",
        ]);


    }

    public function testValidation()
    {
        // run seeder to insert all  data
        $this->seed();

        //trip_id required
        $response = $this->get('/api/available-seats?start_station=Alexandria&end_station=Giza');

        //ensure that status code ==200
        $response->assertStatus(200);

        //ensure that basic objects are returned from api
        $response->assertJson([
            "success"=> false,
            "response_code"=> 400,
            "message"=> "validation error",
        ]);


    }
}
