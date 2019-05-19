<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{

    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('building');
            $table->integer('floor');
            $table->integer('wing');
            $table->integer('room_number');
            $table->unsignedInteger('student_id')->nullable();
            $table->timestamps();
            $table->foreign('student_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
