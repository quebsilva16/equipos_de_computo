<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipoDeComputosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo_de_computos', function (Blueprint $table) {
            $table->id();

            $table->string('marca');
            $table->string('tarjeta_madre');
            $table->int('memoria_ram');
            $table->string('tarjeta_gráfica');
            $table->string('teclado');
            $table->string('pantalla');

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
        Schema::dropIfExists('equipo_de_computos');
    }
}
