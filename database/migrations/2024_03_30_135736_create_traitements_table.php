<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraitementsTable extends Migration
{
    public function up()
    {
        Schema::create('traitements', function (Blueprint $table) {
            $table->integer('idTraitement');
            $table->string('typeTraitement', 150);
            $table->string('MODALITE_EVOLUTIVE_EN_HOSPITALISATION', 50);
            $table->string('Aspect_defavorables', 50)->nullable();
            $table->string('typeComplications', 146)->nullable();
            $table->integer('deces');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('traitements');
    }
}
