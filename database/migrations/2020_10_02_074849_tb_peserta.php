<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbPeserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_peserta', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_sekolah');
            $table->string('nama_peserta');
            $table->timestamps();

            $table->foreign('id_sekolah')->references('id')->on('tbl_daftar_sekolah');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_peserta');
    }
}
