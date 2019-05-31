<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabsTable extends Migration
{
    public function up()
    {
        Schema::create('labs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('course_id');

            $table->string('title');
            $table->string('max_members'); // max number of students per assignment
            $table->date('deadline');

            $table->foreign('course_id')->references('id')->on('courses');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('labs');
    }
}
