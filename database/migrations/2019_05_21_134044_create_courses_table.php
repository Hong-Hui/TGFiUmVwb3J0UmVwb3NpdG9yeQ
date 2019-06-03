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
            $table->string('year');
            $table->string('section'); // fall || winter
            $table->string('group'); // in case there exist many
            $table->string('status'); // ongoing || finished

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
