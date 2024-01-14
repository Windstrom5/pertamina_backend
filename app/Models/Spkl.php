<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spkl extends Model
{
    use HasFactory;

    protected $table = 'spkl'; // Replace with your actual table name
    protected $primaryKey = 'nomor'; // Assuming 'nomor' is the primary key
    public $timestamps = false; // Assuming there's no 'created_at' and 'updated_at' columns

    protected $fillable = [
        'tanggal_pengajuan', 'kode_pekerja', 'nama', 'pekerjaan', 'tanggal', 'ket_hari',
        'posisi', 'mulai', 'akhir', 'lama_lembur_konversi', 'lama_lembur', 'uang_lembur',
        'status', 'keterangan', 'Approver', 'Justifikasi'
    ];
}
