<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('cperApellido');
            $table->string('cperNombre');
            $table->string('cPerDireccion');
            $table->date('dPerFechaNac');
            $table->integer('nPerEdad');
            $table->decimal('nPerSueldo', 8, 2);
            $table->boolean('nPerEstado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
