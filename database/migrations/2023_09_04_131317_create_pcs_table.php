<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sector');
            $table->foreign('id_sector')->references('id')->on('sectores')->onDelete('cascade');
            $table->String('trabajador');
            $table->String('nombre_pc');
            $table->String('usuario_geasys');
            $table->String('ip_172');
            $table->String('ip_10');
            $table->String('mac');
            $table->String('cpu');
            $table->String('ram');
            $table->String('so');
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
        Schema::dropIfExists('pcs');
    }
}
