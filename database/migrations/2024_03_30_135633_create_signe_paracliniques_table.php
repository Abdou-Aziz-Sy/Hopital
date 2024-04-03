<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSigneParacliniquesTable extends Migration
{
    public function up()
    {
        Schema::create('signe_paracliniques', function (Blueprint $table) {
            $table->integer('idSigneParaclinique');
            $table->string('Biologie', 500);
            $table->boolean('TELECOEUR');
            $table->integer('Index_cardiothoracique');
            $table->string('Autres_signes', 50);
            $table->boolean('ECG');
            $table->string('Resulltats', 50);
            $table->boolean('ETT');
            $table->boolean('Epanchement_pericardiaque');
            $table->string('Fuite_valvulaire', 50);
            $table->string('Stenose_valvulaire', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('signe_paracliniques');
    }
}
