<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedecinsTable extends Migration
{
    public function up()
    {
        Schema::create('medecins', function (Blueprint $table) {
            $table->string('Matricule', 50)->primary();
            $table->integer('Hopital');
            $table->string('Nom', 50);
            $table->string('Prenom', 50);
            $table->string('Mail', 50)->unique();
            $table->string('Adresse', 50);
            $table->unique('Mail', 'unique_mail_medecins');
            $table->foreign('Hopital')->references('idHopital')->on('hopitals');
            $table->foreign('Mail')->references('login')->on('comptes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('medecins');
    }
}

