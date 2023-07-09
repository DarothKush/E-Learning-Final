<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Courses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('course', function (Blueprint $table) {
        //     $table->increments('course_id');
        //     $table->unsignedInteger('teacher_id');
        //     $table->unsignedInteger('category_id');
        //     $table->string('course_name');
        //     $table->string('subject');
        //     $table->string('status');
        //     $table->string('course_description');
        //     $table->string('course_img');
        //     $table->float('price');
        //     $table->timestamps();
        //     $table->foreign('teacher_id')
        //         ->references('teacher_id')
        //         ->on('teachers');
                
        //     $table->foreign('category_id')
        //         ->references('category_id')
        //         ->on('category');
        // });

        Schema::create('lessons', function (Blueprint $table){
            $table->increments('lesson_id');
            $table->unsignedInteger('course_id');
            $table->string('lesson_name');
            $table->string('video_url');
            $table->timestamps();
            $table->foreign('course_id')
                ->references('course_id')
                ->on('courses')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
        Schema::dropIfExists('courses');
    }
}
