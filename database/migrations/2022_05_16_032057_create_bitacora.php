<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitacora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacora', function (Blueprint $table) {
            $table->bigIncrements('COD_BITACORA');
            //$table->string('COD_USUARIO'); ESTA COMENTADO PORQUE NO SE COMO CONECTAR A USUARIOS
            $table->unsignedBigInteger('COD_TIPO_BITACORA');
            $table->string('NOMBRE_MODULO');
            $table->string('NOMBRE_REPORTE');
            $table->string('INFO');
            $table->datetime('FECHA_CREACION');
            //$table->foreign('COD_USUARIO')->references('id')->on('users');
            $table->foreign('COD_TIPO_BITACORA')->references('COD_TIPO_BITACORA')->on('tipo_bitacora');
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
        Schema::dropIfExists('bitacora');
    }
}
