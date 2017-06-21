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
            $table->increments('social_id');
            $table->integer('user_id')->unsigned();
            $table->string('facebook');
            $table->string('twitter');
            $table->string('google_plus');
            $table->string('vk');
            $table->string('pinterest');
            $table->string('tumblr');
            $table->string('linkedin');
            $table->string('skype');
            $table->string('instagram');
            $table->string('github');
            $table->string('soundcloud');
            $table->string('flickr');
            $table->string('youtube');
            $table->string('vine');
            $table->string('rss');
            $table->string('dribble');
            $table->string('Behance');
            $table->string('spotify');
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
