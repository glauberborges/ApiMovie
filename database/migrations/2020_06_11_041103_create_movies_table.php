<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->date('release_date');
            $table->time('duration');
            $table->timestamps();
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genre_movies');
            $table->unsignedBigInteger('director_id');
            $table->foreign('director_id')->references('id')->on('directors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
