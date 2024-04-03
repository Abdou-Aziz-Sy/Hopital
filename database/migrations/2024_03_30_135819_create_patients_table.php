<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id('Numero');
            $table->string('Nom', 50);
            $table->string('Prenom', 50);
            $table->integer('idSigneClinique');
            $table->integer('idAntecedent');
            $table->integer('idTraitement');
            $table->integer('idEvolution');
            $table->integer('idSigneParaclinique');
            $table->integer('idAspect');
            $table->string('Matricules', 50);
            $table->timestamps();

            $table->foreign('idSigneClinique')->references('idSigneClinique')->on('signe_cliniques');
            $table->foreign('idAntecedent')->references('idAntecedent')->on('antecedents');
            $table->foreign('idTraitement')->references('idTraitement')->on('traitements');
            $table->foreign('idEvolution')->references('idEvolution')->on('evolutions');
            $table->foreign('idSigneParaclinique')->references('idSigneParaclinique')->on('signe_paracliniques');
            $table->foreign('idAspect')->references('idAspect')->on('aspect_socio_demographiques');
        });
    }

    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
