<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentsTable extends Migration
{
    public function up()
    {
        Schema::create('antecedents', function (Blueprint $table) {
            $table->integer('idAntecedent');
            $table->string('HTA_Gravidique', 50);
            $table->string('Gyneco_obstetricaux', 50);
            $table->integer('Menarche');
            $table->integer('Parite');
            $table->integer('Gestité');           
            $table->string('Tocolyse_prolongee', 50);
            $table->boolean('ATCD_decompensation');
            $table->integer('Nombre_de_decompensation');
            $table->string('Type_insuffisance_cardiaque', 50);
            $table->boolean('Hospitalisationsanterieures');
            $table->integer('Nombre_hospitalisations_anterieur');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('antecedents');
    }
}

