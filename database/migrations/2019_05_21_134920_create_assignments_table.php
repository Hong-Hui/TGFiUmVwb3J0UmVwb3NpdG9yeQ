<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('lab_id');

            $table->string('title');
            $table->string('source');
            $table->smallInteger('mark')->nullable();
            $table->string('status');
            $table->string('visibility');

            $table->foreign('lab_id')->references('id')->on('labs');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assignments');
    }
}
