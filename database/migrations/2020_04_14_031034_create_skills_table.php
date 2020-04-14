<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Skills', function (Blueprint $table) {
            $table->increments('SkillID');
            $table->string('Title');
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
        Schema::dropIfExists('skills');
    }
}
