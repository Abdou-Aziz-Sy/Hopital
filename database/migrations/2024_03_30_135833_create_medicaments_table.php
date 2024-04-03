<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentsTable extends Migration
{
    public function up()
    {
        Schema::create('medicaments', function (Blueprint $table) {
            $table->id('idMedicament');
            $table->integer('idOrdonnances');
            $table->string('Nom', 50);
            $table->timestamps();

            $table->foreign('idOrdonnances')->references('idOrdonnances')->on('ordonnances');
        });
    }

    public function down()
    {
        Schema::dropIfExists('medicaments');
    }
}

