<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();

            $table->string('tipo_de_procesador');
            $table->integer('cantidad_de_memoria_ram');
            $table->integer('cantidad_de_almacenamiento');
            $table->string('tipo_de_tarjeta_grafica');
            $table->boolean('teclado');
            $table->boolean('lector_de_disco');

            $table->boolean('touchpad');
            $table->string('numero_de_monitores');
             $table->boolean('base');


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
        Schema::dropIfExists('laptops');
    }
}
