<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('oauth_uid')->nullable();
            $table->enum('oauth_provider',array('facebook','google','twitter'))->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('display_name')->nullable();
            $table->string('avatar',255)->nullable();
            $table->string('dob');
            $table->integer('age')->nullable();
            $table->integer('total_notes');
            $table->string('link',255)->nullable();
            $table->string('website',255)->nullable();
            $table->string('gender',20);
            $table->string('local',20)->nullable();
            $table->enum('verified',array('off','on'));
            $table->enum('status',array('off','on')); 
            $table->enum('checktc',array('off','on')); 
            $table->integer('followers'); 
            $table->integer('following');
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('school')->nullable();
            $table->string('university')->nullable();
            $table->string('occupation')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('religious_belifs')->nullable();
            $table->string('political_incline')->nullable();
            $table->string('cover')->nullable();
            $table->string('cover_position')->nullable();
            $table->integer('total_notes_likes'); 
            $table->integer('total_notes_comment');
            $table->integer('total_notes_views'); 
            $table->ipAddress('ip_address');  
            $table->text('about')->nullable(); 
            $table->enum('user_type',array('subscriber','admin'));   
            $table->string('session_token')->nullable();  
            $table->string('phone')->unique()->nullable();
            $table->string('alternate_email')->nullable();           
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
