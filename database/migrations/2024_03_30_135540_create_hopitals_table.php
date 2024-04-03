<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopitalsTable extends Migration
{
    public function up()
    {
        Schema::create('hopitals', function (Blueprint $table) {
            $table->id('idHopital');
            $table->string('Nom', 50);
            $table->string('Adresse', 50);
            $table->string('Services', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hopitals');
    }
}
