<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_articulos', function (Blueprint $table) {
            $table->id('id_ordenarticulos');
            $table->unsignedBigInteger('orden_id');
            $table->unsignedBigInteger('productos_id');
            $table->integer('cantidad');
            $table->foreign('orden_id')->references('id_orden')->on('orden');
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
        Schema::dropIfExists('orden_articulos');
    }
}
