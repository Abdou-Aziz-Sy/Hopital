<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppartenirsTable extends Migration
{
    public function up()
    {
        Schema::create('appartenirs', function (Blueprint $table) {
            $table->integer('idHopital');
            $table->string('Matricule', 50);
            $table->primary(['idHopital', 'Matricule']);
            $table->timestamps();

            $table->foreign('idHopital')->references('idHopital')->on('hopitals');
            $table->foreign('Matricule')->references('Matricule')->on('medecins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('appartenirs');
    }
}

