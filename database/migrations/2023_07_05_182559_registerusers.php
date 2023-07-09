<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registerusers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerusers', function (Blueprint $table) {
            $table->increments('registerUser_id')->unique();
            $table->timestamps();
            $table->string('registerUser_firstname');
            $table->string('registerUser_lastname');
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->unique('email', 'email');
        });
    }

    public function down()
    {
        Schema::dropIfExists('registerusers');
    }
}
