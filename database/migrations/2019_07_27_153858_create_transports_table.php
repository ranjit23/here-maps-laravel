<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('company_name');
            $table->bigInteger('contact');
            $table->string('no_of_vehicles');
            $table->integer('available_length');
            $table->integer('available_breadth');
            $table->integer('available_height');
            $table->integer('truck_height');
            $table->integer('truck_width');
            $table->integer('departure_time');
            $table->string('route_a');
            $table->string('route_b');
            $table->string('vehicle_no');
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
        Schema::dropIfExists('transports');
    }
}
