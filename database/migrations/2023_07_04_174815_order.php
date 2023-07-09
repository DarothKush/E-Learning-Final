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
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');            
        });

        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('order_detail_id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('course_id');
            $table->Integer('quantity');
            $table->timestamps();

            $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade'); 
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');                       
        });

        Schema::create('client_details', function (Blueprint $table) {
            $table->increments('client_detail_id');
            $table->unsignedInteger('order_id');
            $table->string('client_name');
            $table->string('client_email');
            $table->string('address', 255);
            $table->timestamps();

            $table->foreign('order_id')->references('user_id')->on('users')->onDelete('cascade');   
        });
        Schema::create('website_payment', function (Blueprint $table) {
            $table->increments('payment_id');
            $table->string('payment');
               
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
