<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->text('hobbies')->nullable();
            $table->string('music_artists')->nullable();
            $table->string('tv_shows')->nullable();
            $table->string('fav_movies')->nullable();
            $table->string('fav_books')->nullable();
            $table->string('fav_writers')->nullable();
            $table->string('fav_games')->nullable();
            $table->string('other_interest')->nullable();
            $table->string('ip_address');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interests');
    }
}
