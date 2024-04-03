<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssistantsTable extends Migration
{
    public function up()
    {
        Schema::create('assistants', function (Blueprint $table) {
            $table->string('Matricule' ,50)->primary();
            $table->string('Email', 50);
            $table->string('Prenom', 50);
            $table->string('Nom', 50);
            $table->string('Adresse', 50);
            $table->string('Matricule_1', 50);
            $table->timestamps();

            $table->foreign('Matricule_1')->references('Matricule')->on('medecins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('assistants');
    }
}

