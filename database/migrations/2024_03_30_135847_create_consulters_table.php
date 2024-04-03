<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultersTable extends Migration
{
    public function up()
    {
        Schema::create('consulters', function (Blueprint $table) {
            $table->id('idConsultation');
            $table->dateTime('dateConsutation');
            $table->string('Matricule', 50);
            $table->integer('Numero');
            $table->timestamps();

            $table->foreign('Matricule')->references('Matricule')->on('medecins');
            $table->foreign('Numero')->references('Numero')->on('patients');
        });
    }

    public function down()
    {
        Schema::dropIfExists('consulters');
    }
}
