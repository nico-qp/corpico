<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputadorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computadoras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario_window');
            $table->foreign('id_usuario_window')->references('id')->on('usuarios_windows')->onDelete('cascade');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('id_condicion');
            $table->foreign('id_condicion')->references('id')->on('condiciones')->onDelete('cascade');
            $table->unsignedBigInteger('id_sectore');
            $table->foreign('id_sectore')->references('id')->on('sectores')->onDelete('cascade');
            $table->String('etiqueta');
            $table->String('nombre');
            $table->String('ip_172');
            $table->String('ip_10');
            $table->String('mac');
            $table->String('procesador');
            $table->String('ram');
            $table->String('so');
            $table->String('marca');
            $table->String('observaciones');
            $table->unsignedBigInteger('id_estado');
            $table->foreign('id_estado')->references('id')->on('estados')->onDelete('cascade');
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
        Schema::dropIfExists('computadoras');
    }
}
