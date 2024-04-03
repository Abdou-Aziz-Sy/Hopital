<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdonnancesTable extends Migration
{
    public function up()
    {
        Schema::create('ordonnances', function (Blueprint $table) {
            $table->id('idOrdonnances');
            $table->string('nomMedecin', 50);
            $table->string('Medicament', 50);
            $table->string('Posologie', 50);
            $table->string('signature', 255)->nullable();
            $table->date('date');
            $table->integer('Numero');
            $table->string('Matricule', 50);
            $table->timestamps();

            $table->foreign('Numero')->references('Numero')->on('patients');
            $table->foreign('Matricule')->references('Matricule')->on('medecins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ordonnances');
    }
}
