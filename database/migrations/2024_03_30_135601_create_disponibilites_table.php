<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisponibilitesTable extends Migration
{
    public function up()
    {
        Schema::create('disponibilites', function (Blueprint $table) {
            $table->id('idDisponibilite');
            $table->dateTime('daDebut');
            $table->dateTime('daFin');
            $table->string('idMedecin', 50);
            $table->foreign('idMedecin')->references('Matricule')->on('medecins');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('disponibilites');
    }
}
