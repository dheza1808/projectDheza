<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananTable extends Migration
{
    public function up()
    {
        Schema::create('layanan', function (Blueprint $table) {
            $table->id('id_layanan');
            $table->unsignedBigInteger('id_mobil');
            $table->unsignedBigInteger('id_karyawan');
            $table->string('nama_layanan', 50);
            $table->datetime('waktu_mulai');
            $table->datetime('waktu_selesai')->nullable();
            $table->enum('status', ['Selesai', 'Dalam Proses']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('layanan');
    }
}
