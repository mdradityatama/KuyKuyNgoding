<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Certificates', function (Blueprint $table) {
            $table->increments('CertificatesID');
            $table->string('Title');
            $table->string('Description');
            $table->date('Year');
            $table->string('Publisher');
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
        Schema::dropIfExists('certificates');
    }
}
