<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('trip_id')
                ->constrained('trips')
                ->onDelete('cascade');
            $table->bigInteger('seat_no')
                ->constrained('bus_seats')
                ->onDelete('cascade');
            $table->bigInteger('user_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->bigInteger('sub_line_id')
                ->constrained('sub_lines')
                ->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
