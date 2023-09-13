<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_tons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usos');
            $table->foreign('id_usos')->references('id')->on('usos')->onDelete('cascade');
            $table->boolean('tipo');
            $table->string('color');
            $table->string('codigo');
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
        Schema::dropIfExists('cart_tons');
    }
}
