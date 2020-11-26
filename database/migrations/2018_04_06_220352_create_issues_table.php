<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('returned')->default('0');
            $table->string('book_name');
            $table->integer('book_id');
            $table->string('user_name');
            $table->string('phone')->nullable();

            
            // $table->integer('book_id')->unsigned()->default(1);
            // $table->foreign('book_id')->references('id')->on('books');


            // $table->integer('user_id')->unsigned()->default(1);
            // $table->foreign('user_id')->references('id')->on('users');

            $table->date('return_date'); 
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
        Schema::dropIfExists('issues');
    }
}
