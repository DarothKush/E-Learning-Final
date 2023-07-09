<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Course extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->increments('course_id')->unique();
            $table->timestamps();
            $table->string('course_name',255);
            $table->string('course_description',255);
            $table->string('subject',255);
            $table->string('teacher_name',255);
            $table->integer('price');
            $table->integer('status');
            $table->string('course_img',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
}
