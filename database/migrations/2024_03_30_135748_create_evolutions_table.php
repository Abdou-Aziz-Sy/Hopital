<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvolutionsTable extends Migration
{
    public function up()
    {
        Schema::create('evolutions', function (Blueprint $table) {
            $table->integer('idEvolution');
            $table->integer('evenement');
            $table->string('CLASSE_NYHA', 50);
            $table->boolean('Deces');
            $table->string('Lieu', 50)->nullable();
            $table->boolean('Observance_therapeutique')->nullable();
            $table->integer('_nombre_de_rehospitalisation');
            $table->string('Facteur_de_Decompensation', 105);
            $table->string('ETT', 50);
            $table->string('BIOLOGIE', 50);
            $table->string('Evolution_bebe', 500)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('evolutions');
    }
}

