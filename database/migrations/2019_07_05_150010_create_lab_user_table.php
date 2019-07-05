<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabUserTable extends Migration
{

    public function up()
    {
        Schema::create('lab_user', function (Blueprint $table) {

            $table->unsignedBigInteger('lab_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lab_user');
    }
}
