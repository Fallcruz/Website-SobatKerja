<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_lowongan', function (Blueprint $table) {
            $table->unsignedBigInteger('lowongan_id');
            $table->foreign('lowongan_id')->references('id')->on('lowongans');

            $table->unsignedBigInteger('pencari_kerja_id');
            $table->foreign('pencari_kerja_id')->references('id')->on('pencari_kerjas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apply_lowongan');
    }
}
