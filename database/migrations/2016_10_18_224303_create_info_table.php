<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->string('ApPat');
            $table->string('ApMat');
            $table->string('FechaNacimiento');
            $table->string('Genero');
            $table->string('Nacionalidad');
            $table->string('CP');
            $table->string('Institucion');
            $table->string('Cargo');
            $table->string('Cel');
            $table->string('Email');
            $table->boolean('SS1')->nullable();
            $table->boolean('SS2')->nullable();
            $table->boolean('SS3')->nullable();
            $table->boolean('Opcion1')->nullable();
            $table->boolean('Opcion2')->nullable();
            $table->boolean('Opcion3')->nullable();
            $table->boolean('Opcion4')->nullable();
            $table->boolean('Opcion5')->nullable();
            $table->string('NomInst')->nullable();
            $table->string('Lugar')->nullable();
            $table->string('TelInst')->nullable();
            $table->string('Actividad')->nullable();
            $table->string('Beneficio')->nullable();
            $table->string('InicioSS')->nullable();
            $table->string('FinSS')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info');
    }
}
