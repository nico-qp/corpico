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
            $table->unsignedBigInteger('id_cart_ton');
            $table->foreign('id_cart_ton')->references('id')->on('cart_tons')->onDelete('cascade');
            $table->unsignedBigInteger('id_sector');
            $table->foreign('id_sector')->references('id')->on('sectores')->onDelete('cascade');
            $table->unsignedBigInteger('id_pc');
            $table->foreign('id_pc')->references('id')->on('pcs')->onDelete('cascade');
            
            $table->String('marca');
            $table->String('modelo');
            $table->String('conexion');
            $table->String('nom_ip');
            $table->String('autonomia_resma');
            $table->String('autonomia_cart_ton');
            $table->String('uso');
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
