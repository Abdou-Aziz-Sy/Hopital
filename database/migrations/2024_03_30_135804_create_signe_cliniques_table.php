<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSigneCliniquesTable extends Migration
{
    public function up()
    {
        Schema::create('signe_cliniques', function (Blueprint $table) {
            $table->integer('idSigneClinique');
            $table->boolean('Dyspnee_effort');
            $table->string('Type_de_dyspnee', 50);
            $table->boolean('OEdeme_aigu_poumon');
            $table->boolean('Toux');
            $table->boolean('Palpitations');
            $table->boolean('OMI');
            $table->string('Constantes', 350);
            $table->boolean('Souffle_cardiaque');
            $table->string('Type_de_souffle', 50);
            $table->boolean('TSVJ');
            $table->boolean('Hepatomegalie');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('signe_cliniques');
    }
}
