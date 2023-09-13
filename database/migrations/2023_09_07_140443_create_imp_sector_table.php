<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpSectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_sector', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pc');
            $table->foreign('id_pc')->references('id')->on('pcs')->onDelete('cascade');
            $table->unsignedBigInteger('id_impresora');
            $table->foreign('id_impresora')->references('id')->on('impresoras')->onDelete('cascade');
            $table->unsignedBigInteger('id_sector');
            $table->foreign('id_sector')->references('id')->on('sectores')->onDelete('cascade');
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
        Schema::dropIfExists('imp_sector');
    }
}
