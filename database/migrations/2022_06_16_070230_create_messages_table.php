<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            
            $table->string('movieTitle');
            $table->string('movieDescription');
            $table->integer('movieScore');
            $table->integer('movieRelease');
            $table->string('movieGenre');
            $table->binary('moviePic');
            $table->string('titleMessage');
            $table->string('contentMessage');

            $table->timestamps();
            // HERE ADD THE DATABASE STRUCTURES , NAME, TYPE; BLABLA
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
