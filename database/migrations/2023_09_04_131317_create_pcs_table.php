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
            $table->unsignedBigInteger('id_so_user');
            $table->foreign('id_so_user')->references('id')->on('so_users')->onDelete('cascade');
            $table->unsignedBigInteger('id_geasys_user');
            $table->foreign('id_geasys_user')->references('id')->on('geasys_users')->onDelete('cascade');
            $table->unsignedBigInteger('id_condicion');
            $table->foreign('id_condicion')->references('id')->on('conditions')->onDelete('cascade');
            $table->unsignedBigInteger('id_sectore');
            $table->foreign('id_sectore')->references('id')->on('sectores')->onDelete('cascade');
            $table->String('etiqueta');
            $table->String('nombre_pc');
            $table->String('ip_172');
            $table->String('ip_10');
            $table->String('mac');
            $table->String('cpu');
            $table->String('ram');
            $table->String('so');
            $table->String('marca');
            $table->String('observaciones');
            $table->boolean('uso_stock');
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
