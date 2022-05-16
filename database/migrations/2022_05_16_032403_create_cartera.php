<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartera extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartera', function (Blueprint $table) {
            $table->bigIncrements('COD_CARTERA');
            $table->float('VALOR_ACUMULADO', 10,2);
            $table->float('SALDO', 10,2);
            $table->unsignedBigInteger('COD_ESTADO');
            $table->string('OBSERVACIONES');
            $table->foreign('COD_ESTADO')->references('COD_ESTADO')->on('estado');
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
        Schema::dropIfExists('cartera');
    }
}
