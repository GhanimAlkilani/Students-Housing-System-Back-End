<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintenanceRequestsTable extends Migration
{

    public function up()
    {
        Schema::create('maintenance_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('status', ['closed', 'open', 'in_process'])->default('open');
            $table->enum('type', ['electricity', 'plumbing', 'carpentry']);
            $table->unsignedInteger('student_id');
            $table->foreign('student_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('maintenance_requests');
    }
}
