<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputadorasSoftwaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computadoras_softwares', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_software');
            $table->foreign('id_software')->references('id')->on('softwares')->onDelete('cascade');
            $table->unsignedBigInteger('id_computadora');
            $table->foreign('id_computadora')->references('id')->on('computadoras')->onDelete('cascade');
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
        Schema::dropIfExists('computadoras_softwares');
    }
}
