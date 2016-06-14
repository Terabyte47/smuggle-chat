<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create user table
        Schema:: create('tbl_users', function(Blueprint $table){
            $table->increments('id');
            $table->string('firstname',255);
            $table->string('lastname', 255);
            $table->string('gender');
            $table->string('mobile');
            $table->string('email',255)->unique();
            $table->string('password',255);
            $table->string('physical_address')->nullable();
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
        //Drop tables
         Schema:: drop('tbl_users');
    }
}
