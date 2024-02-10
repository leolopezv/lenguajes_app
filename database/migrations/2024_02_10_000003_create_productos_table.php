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
            $table->id('productoID');
            $table->string('nombre');
            $table->decimal('precio', 10, 2);
            $table->string('descripcion');
            $table->integer('existencia actual');
            $table->foreignId('categoriaID')->constrained('categorias', 'categoriaID');
            $table->foreignId('proveedorID')->constrained('proveedores', 'proveedorID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}