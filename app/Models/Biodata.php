<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unit;
use App\Models\Reviewer;

class Biodata extends Model
{
    use HasFactory;

    protected $table = 'biodata'; // Replace with your actual table name
    protected $primaryKey = 'kode_pekerja'; // Assuming 'no' is the primary key
    public $timestamps = false; // Assuming there's no 'created_at' and 'updated_at' columns

    protected $fillable = [
        'kode_pekerja', 'PJP', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'start_date', 'end_date',
        'masa_kerja', 'kota_kerja', 'lokasi', 'klasifikasi_name', 'klasifikasi', 'pendidikan',
        'jurusan', 'fungsi_pengguna', 'cost_center_pengguna', 'cost_center_pooler',
        'cost_center_name_pooler', 'upah', 'insentif_kehadiran', 'insentif_dot',
        'paket_mcu', 'biaya_mcu', 'pola_kerja'
    ];

    // public function unit()
    // {
    //     return $this->belongsTo(Unit::class, 'cost_center_pengguna', 'cost_center_pengguna');
    // }

    // public function reviewer()
    // {
    //     return $this->hasOne(Reviewer::class, 'id_org_unit', 'cost_center_pengguna');
    // }
}
