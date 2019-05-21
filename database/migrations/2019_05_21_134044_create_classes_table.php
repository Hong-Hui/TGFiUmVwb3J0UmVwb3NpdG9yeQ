<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('major');
            $table->string('year');
            $table->string('semester'); // winter || spring || summer || autumn
            $table->string('number'); // in case there exist many
            $table->string('status'); // ongoing || finished

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
