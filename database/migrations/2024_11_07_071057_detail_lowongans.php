<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailLowongans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_lowongans', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('kualifikasi');
            $table->string('penempatan');
            $table->date('tanggal_berakhir');
            $table->unsignedBigInteger('id_posisi'); // Pastikan tipe data cocok
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
        Schema::dropIfExists('detail_lowongans');
    }
}
