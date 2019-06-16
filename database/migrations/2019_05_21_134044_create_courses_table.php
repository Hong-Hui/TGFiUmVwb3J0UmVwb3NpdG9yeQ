<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{

    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name'); // i.e Project Management
            $table->string('major'); // i.e Software Engineering
            $table->string('year'); // i.e 1999
            $table->string('section'); // fall || spring
            $table->string('group'); // if there exist many classes for the same course
            $table->string('status'); // ongoing || completed || archived

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }

}
