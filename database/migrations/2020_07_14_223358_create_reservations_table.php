<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
          $table->increments('id');
          $table->increments('id');
          $table->date('date_in');
          $table->date('date_out');
          $table->integer('client_id')->unsigned()->unique();
          $table->foreign('client_id')->references('id')->on('clients');
          $table->integer('room_id')->unsigned()->unique();
          $table->foreign('room_id')->references('id')->on('rooms');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
