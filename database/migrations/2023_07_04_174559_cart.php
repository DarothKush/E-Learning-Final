<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('cart_id');
            $table->string('user_id')->nullable();
            $table->string('course_name')->nullable();
            $table->string('course_description')->nullable();
            $table->integer('course_id')->nullable();
            $table->float('price')->nullable();
            $table->timestamps();
            $table->index('course_id');
            $table->index('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('course_id')->on('courses');
        });
        Schema::create('cart_details', function (Blueprint $table) {
            $table->increments('cart_details_id');
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('cart_id');
            $table->Integer('quantity');
            $table->float('price');
            $table->timestamps();

            $table->foreign('cart_id')->references('cart_id')->on('carts')->onDelete('cascade');
            $table->foreign('course_id')->references('course_id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
