<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilTable extends Migration
{
    public function up()
    {
        Schema::create('mobil', function (Blueprint $table) {
            $table->id('id_mobil');
            $table->string('plat_nomor', 15);
            $table->string('jenis_layanan', 50);
            $table->enum('status_pembayaran', ['Lunas', 'Belum Lunas']);
            $table->datetime('waktu_layanan');
            $table->datetime('waktu_selesai')->nullable();
            $table->string('jenis_mobil', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobil');
    }
}
