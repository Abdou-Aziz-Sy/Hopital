<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->string('Login', 50)->primary();
            $table->enum('Role', ['Medecin', 'Admin', 'Assistant']);
            $table->string('motDePasse', 50);
            $table->string('Matricule', 50)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comptes');
    }
}
