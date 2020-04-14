<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Experiences', function (Blueprint $table) {
            $table->increments('ExperiencesID');
            $table->string('Title');
            $table->string('Description');
            $table->string('PathPhoto');
            $table->integer('Information_ID')->unsigned();
            $table->timestamps();

            $table->foreign('Information_ID')->references('InformationID')->on('Informations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiences');
    }
}
