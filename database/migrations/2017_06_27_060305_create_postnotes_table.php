<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostnotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postnotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->text('content');
            $table->string('location')->nullable();
            $table->string('featured_image')->nullable();
            $table->enum('is_featured',['yes','no'])->default('no');
            $table->integer('likes')->nullable();
            $table->integer('comments')->nullable();
            $table->integer('bookmarkerd')->nullable();
            $table->integer('share')->nullable();
            $table->string('hastags')->nullable();
            $table->string('user_mentioned')->nullable();
            $table->string('ip_address');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('postnotes');
    }
}
