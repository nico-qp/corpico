<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumiblesImpresorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumibles_impresoras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_consumible');
            $table->foreign('id_consumible')->references('id')->on('consumibles')->onDelete('cascade');
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
        Schema::dropIfExists('consumibles_impresoras');
    }
}
