<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_productos');
            $table->string('nombre');
            $table->string('imagen');
            $table->string('descripcion');
            $table->double('precio');
            $table->double('iva');
            $table->integer('existencias');
            $table->unsignedBigInteger('categoria_id'); 
            $table->foreign('categoria_id')->references('id_categoria')->on('categoria');
            $table->unsignedBigInteger('proveedor_id'); 
            $table->foreign('proveedor_id')->references('id_proveedor')->on('proveedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
