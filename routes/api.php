<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/', 'namespace' => 'Api'], function () {
    /* ----------------------- rooms-prices ------------------------*/
    Route::get('/available-seats', 'TripController@available_seats');
});

Route::group(["middleware" => "auth:api"] , function(){

});

