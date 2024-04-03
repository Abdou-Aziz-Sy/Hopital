<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspectSocioDemographiquesTable extends Migration
{
    public function up()
    {
        Schema::create('aspect_socio_demographiques', function (Blueprint $table) {
            $table->id('idAspect');
            $table->string('Initiales', 3);
            $table->integer('Age');
            $table->string('Adresse', 50);
            $table->string('Telephone', 50);
            $table->string('Profession', 50);
            $table->enum('Sexe', ['Masculin', 'Féminin']);
            $table->enum('Status_Matrimonial', ['Marié(e)', 'Célibataire', 'Veuf(ve)']);
            $table->enum('Niveau_Socio_Economique', ['Bon', 'Moyen', 'Bas']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aspect_socio_demographiques');
    }
}
