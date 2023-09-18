<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputadorasImpresorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computadoras_impresoras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_computadora');
            $table->foreign('id_computadora')->references('id')->on('computadoras')->onDelete('cascade');
            $table->unsignedBigInteger('id_impresora');
            $table->foreign('id_impresora')->references('id')->on('impresoras')->onDelete('cascade');
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
        Schema::dropIfExists('computadoras_impresoras');
    }
}
