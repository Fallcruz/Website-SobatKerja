<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // karena tabel lowongans references ke tabel penyedia_kerjas => maka migration tabel penyedia_kerjas harus ada diatas tabel lowongans => cara nya adalah ganti tanggal pada nama migration tabel penyedia_kerjas => buat tanggal lebih awal dari tanggal migration lowongan
        Schema::create('lowongans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penyedia_kerja_id');
            $table->foreign('penyedia_kerja_id')->references('id')->on('penyedia_kerjas');
            $table->string('pekerjaan');
            $table->string('nama_perusahaan');
            $table->string('lokasi');
            $table->string('pengalaman');
            $table->string('kualifikasi');
            $table->integer('gaji');
            $table->text('persyaratan');
            $table->string('gambar');
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
        Schema::dropIfExists('lowongans');
    }
}
