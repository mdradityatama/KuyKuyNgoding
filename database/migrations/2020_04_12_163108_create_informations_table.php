<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Informations', function (Blueprint $table) {
            $table->increments('InformationID');
            $table->string('Name');
            $table->string('Title');
            $table->string('City');
            $table->string('Religion');
            $table->string('Nationality');
            $table->string('PhotoProfile');
            $table->string('Summery');
            $table->integer('User_ID')->unsigned();
            $table->timestamps();

            $table->foreign('User_ID')->references('UserID')->on('Users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informations');
    }
}
