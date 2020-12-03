<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id'); 
            $table->string('name');  
            $table->string('img')->nullable();
            $table->string('email')->unique(); 
            $table->timestamp('email_verified_at')->nullable(); 
            $table->string('phone')->nullable(); 
            $table->string('username'); 
            $table->string('password'); 
            $table->integer('sex')->nullable();  
            $table->string('country')->nullable(); 
            $table->string('city')->nullable(); 
            $table->string('address')->nullable(); 
            $table->string('url_face')->nullable(); 
            $table->string('url_google')->nullable(); 
            $table->string('url_twitter')->nullable(); 
            $table->text('detail_aboutme')->nullable();
            $table->integer('role_id'); 
            $table->string('status')->default('0');
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
