<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubLineStopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_line_stops', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('sub_lines_id')
                ->constrained('sub_lines')
                ->onDelete('cascade');
            $table->bigInteger('stop_id')
                ->constrained('stops')
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
        Schema::dropIfExists('sub_line_stops');
    }
}
