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
        Schema::create('data_siswa_models', function (Blueprint $table) {
            $table->id('id_dataSiswa');
            $table->unsignedBigInteger('jurusan_model_id');
            $table->foreign('jurusan_model_id')->references('id')->on('jurusan_models')->onDelete('cascade');

            $table->string('nis');
            $table->string('nama');
            $table->integer('point');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_siswa_models');
    }
};
