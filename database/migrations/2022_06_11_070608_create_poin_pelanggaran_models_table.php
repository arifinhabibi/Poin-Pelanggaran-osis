<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poin_pelanggaran_models', function (Blueprint $table) {
            $table->id('id_poinPelanggaran');
            $table->foreignId('data_siswa_model_id')->references('id_dataSiswa')->on('data_siswa_models')->onDelete('cascade');

            $table->integer('kesiangan')->nullable();
            $table->integer('alfa')->nullable();
            $table->integer('Tidak_bawa_kitab')->nullable();
            $table->integer('atribut')->nullable();
            $table->integer('perilaku_tidak_sesuai_pelajar')->nullable();
            $table->integer('pelanggaran_konten')->nullable();
            $table->integer('narkoba_serta_napza')->nullable();
            $table->integer('pornografi_pornoaksi_pencemaran_nama_baik')->nullable();
            $table->integer('pelanggaran_elektronik')->nullable();
            $table->integer('pelanggaran_kendaraan')->nullable();
            
            $table->string('tanggal');
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
        Schema::dropIfExists('poin_pelanggaran_models');
    }
};
