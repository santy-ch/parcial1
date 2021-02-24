<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });


        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('modelo');
            $table->integer('talla');
            $table->string('color');
            $table->string('imagen');
            $table->foreignId('categoria_id')->references('id')->on('categorias');
            $table->foreignId('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('pedidos');
        Schema::dropIfExists('categorias');
    }

}
