<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_cliente', function (Blueprint $table) {
            $table->bigIncrements('COD_GESTION');
            $table->unsignedBigInteger('COD_CLIENTE');
            $table->date('FECHA_GESTION');
            $table->date('FECHA_EXPIRADO');
            $table->date('FECHA_ULTIM_PAGO');
            $table->integer('NUM_CUOTAS');
            $table->string('CUOTAS_PENDIENTE_CL');
            $table->integer('CUOTAS_PENDIENTES_LPS');
            $table->unsignedBigInteger('COD_CREDITO');
            $table->string('COLABORADOR 1', 45);
            $table->string('COLABORADO2', 45);
            $table->foreign('COD_CLIENTE')->references('COD_CLIENTE')->on('cliente');
            $table->foreign('COD_CREDITO')->references('COD_CREDITO')->on('creditos');
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
        Schema::dropIfExists('gestion_cliente');
    }
}
