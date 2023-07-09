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
            $table->increments('user_id');
            $table->string('name');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        // DB:table('users')->insert([
        //     ['name' => 'admin'],
        //     ['email' => 'admin@gmail.com'],
        //     ['email_verified_at' => 'NULL'],
        //     ['password' => '$2y$10$e9nWSUg/T3xCzldYcT6I1OIOh8GofdnQ4DMbDN61jpSjYLmEOR2hS'],
            
        // ]);
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
