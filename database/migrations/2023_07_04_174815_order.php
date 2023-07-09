<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->integer('user_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('postcode')->nullable();
            $table->string('contact')->nullable();
            $table->string('state')->nullable();
            $table->string('state_zipcode')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade'); 
        });

        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('order_detail_id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('course_id');
            $table->float('price');
            $table->timestamps();

            $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade'); 
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');                       
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
