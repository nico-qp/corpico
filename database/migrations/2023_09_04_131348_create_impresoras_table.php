<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpresorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impresoras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sector');
            $table->foreign('id_sector')->references('id')->on('sectores')->onDelete('cascade');
            $table->unsignedBigInteger('id_criticidad');
            $table->foreign('id_criticidad')->references('id')->on('criticidades')->onDelete('cascade');
            $table->String('marca');
            $table->String('modelo');
            $table->String('conectividad');
            $table->String('ip');
            $table->String('autonomia_resma');
            $table->boolean('stock');
            $table->String('observaciones');
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
        Schema::dropIfExists('impresoras');
    }
}
