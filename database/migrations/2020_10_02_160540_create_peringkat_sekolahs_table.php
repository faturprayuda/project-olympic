<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeringkatSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peringkat_sekolah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_peserta');
            $table->string('nama_sekolah');
            $table->string('nilai');
            $table->string('sisa_waktu');
            $table->date('tanggal');
            $table->integer('medal_emas')->default(0);
            $table->integer('medal_perak')->default(0);
            $table->integer('medal_perunggu')->default(0);
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
        Schema::dropIfExists('peringkat_sekolah');
    }
}
