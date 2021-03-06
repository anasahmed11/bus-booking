<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_lines', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('line_id')
                ->constrained('lines')
                ->onDelete('cascade');
            $table->bigInteger('start_station_id')
                ->constrained('stations')
                ->onDelete('cascade');
            $table->bigInteger('end_station_id')
                ->constrained('stations')
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
        Schema::dropIfExists('sub_lines');
    }
}
