<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajiTable extends Migration
{
    public function up()
    {
        Schema::create('gaji', function (Blueprint $table) {
            $table->id('id_gaji');
            $table->foreignId('id_karyawan')->constrained('karyawan')->onDelete('cascade');
            $table->integer('bulan');
            $table->integer('tahun');
            $table->decimal('total_gaji', 10, 2)->default(0);
            $table->decimal('tambah_karpet', 10, 2)->default(0)->nullable();
            $table->integer('jumlah_layanan')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gaji');
    }
}
