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

            $table->integer('topi')->nullable();
            $table->integer('kesiangan')->nullable();
            $table->integer('rambut')->nullable();
            $table->integer('atribut')->nullable();
            
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
