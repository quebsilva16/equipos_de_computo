<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposDeComputosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos_de_computos', function (Blueprint $table) {
            $table->id();

            $table->string('tipo');
            $table->string('marca');
            $table->string('tipo_de_procesador');
            $table->integer('cantidad_de_memoria_ram');
            $table->integer('cantidad_de_almacenamiento');
            $table->string('tipo_de_tarjeta_grafica');
            $table->integer('numero_de_monitores')->nullable();
            $table->boolean('teclado')->nullable();
            $table->boolean('mouse')->nullable();

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
        Schema::dropIfExists('equipos_de_computos');
    }
}
