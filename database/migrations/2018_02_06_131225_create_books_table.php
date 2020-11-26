<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{

    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isbn') ; // book_shelf
            $table->integer('total') ; // book_shelf
            $table->integer('avilable'); // book_shelf
            $table->string('title');
            $table->string('language');
            $table->string('description');
            $table->string('Bookcover');
            $table->string('created_by');
            // $table->string('author');
            // $table->integer('shelf'); // book_shelf

            $table->integer('category_id')->unsigned() ;
            $table->foreign('category_id')->references('id')->on('categories');

            $table->integer('author_id')->unsigned() ;
            $table->foreign('author_id')->references('id')->on('authors');

            $table->integer('publisher_id')->unsigned() ;
            $table->foreign('publisher_id')->references('id')->on('publishers');

            $table->integer('cupbord_id')->unsigned() ;
            $table->foreign('cupbord_id')->references('id')->on('cupbords');

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
        Schema::dropIfExists('books');
    }
}
