<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKardexproductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kardexproducto', function (Blueprint $table) {
            $table->id('id_kardexproducto');
            $table->timestamp('fecha_k');
            $table->integer('cantidadEntrada_k');
            $table->integer('cantidadSalida_k');
            $table->double('costoEntrada_k');
            $table->double('costoSalida_k');
            $table->unsignedBigInteger('productos_id');
            $table->foreign('productos_id')->references('id_productos')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kardexproducto');
    }
}
