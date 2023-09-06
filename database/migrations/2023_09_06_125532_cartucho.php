<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cartucho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartucho', function (Blueprint $table) {
            $table->id();
            $table->string('color');
            $table->string('codigo');
            $table->string('uso_mensual');
            $table->string('uso_semestral');
            $table->string('uso_anual');
            $table->string('marca_impresora');
            $table->string('modelo_impresora');
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
        //
    }
}
