<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');

            // $table->integer('user_id')->unsigned();
            // $table->foreign('user_id')->references('id')->on('users');

            $table->string('admin_name');
            $table->string('student_name')->nullable();
            $table->string('logActivity');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
