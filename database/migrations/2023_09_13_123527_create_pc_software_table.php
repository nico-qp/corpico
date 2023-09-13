<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcSoftwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pc_software', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_software');
            $table->foreign('id_software')->references('id')->on('softwares')->onDelete('cascade');
            $table->unsignedBigInteger('id_pc');
            $table->foreign('id_pc')->references('id')->on('pcs')->onDelete('cascade');
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
        Schema::dropIfExists('pc_software');
    }
}
