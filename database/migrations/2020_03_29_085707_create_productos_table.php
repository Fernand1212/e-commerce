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
            $table->unsignedBigInteger('marca');
            $table->foreign('marca')->references('idMarca')->on('marcas')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('categoria');
            $table->foreign('categoria')->references('idCategoria')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->mediumText('prdPresentacion');
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
