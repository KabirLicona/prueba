<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('COD_PERSONA');
            $table->string('IDENTIDAD');
            $table->string('NOMBRE');
            $table->string('APELLIDO');
            $table->string('DIRECCION');
            $table->integer('TELEFONO');
            $table->integer('CELULAR');
            $table->datetime('FECHA_REGISTRO');
            $table->timestamps();
            $table->softDeletes(); //ESTE LO AGREGUE PARA QUE SE MIRE LA FECHA DE ELIMINACION
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
