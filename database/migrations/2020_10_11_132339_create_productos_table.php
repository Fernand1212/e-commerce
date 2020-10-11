<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('idProducto');
            $table->string('prdNombre',100);
            $table->integer('prdPrecio');
            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')->references('idMarca')->on('marcas')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('categorias_id');
            $table->foreign('categorias_id')->references('idCategoria')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->text('prdPresentacion');
            $table->integer('prdStock');
            $table->text('prdImagen');
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
        Schema::dropIfExists('productos');
    }
}
