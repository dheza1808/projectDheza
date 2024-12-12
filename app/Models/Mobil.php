<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    /** @use HasFactory<\Database\Factories\MobilFactory> */
    use HasFactory;

    protected $table = 'mobil'; // Pastikan nama tabel sesuai
    protected $primaryKey = 'id_mobil'; // Sesuaikan dengan nama kolom primary key
    public $timestamps = true; // Untuk kolom created_at dan updated_at

    protected $fillable = [
        'plat_nomor',
        'jenis_layanan',
        'status_pembayaran',
        'waktu_layanan',
        'waktu_selesai',
        'jenis_mobil'
    ];
}
