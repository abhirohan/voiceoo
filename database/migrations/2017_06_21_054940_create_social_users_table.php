<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('vk')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('tumblr')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('skype')->nullable();
            $table->string('instagram')->nullable();
            $table->string('github')->nullable();
            $table->string('soundcloud')->nullable();
            $table->string('flickr')->nullable();
            $table->string('youtube')->nullable();
            $table->string('vine')->nullable();
            $table->string('rss')->nullable();
            $table->string('dribble')->nullable();
            $table->string('behance')->nullable();
            $table->string('spotify')->nullable();
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
        Schema::dropIfExists('social_users');
    }
}
