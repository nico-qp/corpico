<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcImpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pc_imps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pc');
            $table->foreign('id_pc')->references('id')->on('pcs')->onDelete('cascade');
            $table->unsignedBigInteger('id_imp');
            $table->foreign('id_imp')->references('id')->on('impresoras')->onDelete('cascade');
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
        Schema::dropIfExists('pc_imps');
    }
}
