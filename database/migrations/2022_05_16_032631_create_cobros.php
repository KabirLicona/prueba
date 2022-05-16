<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobros', function (Blueprint $table) {
            $table->bigIncrements('COD_COBRO');
            $table->unsignedBigInteger('COD_GESTION');
            $table->date('FECHA_EXPIRACION');
            $table->float('INTERES', 10,2);
            $table->float('SUBTOTAL', 10,2);
            $table->float('TOTAL', 10,2);
            $table->float('PAGADO', 10,2);
            $table->foreign('COD_GESTION')->references('COD_GESTION')->on('gestion_cliente');
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
        Schema::dropIfExists('cobros');
    }
}
