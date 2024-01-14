<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spd extends Model
{
    use HasFactory;

    protected $table = 'spd';
    protected $primaryKey = 'nomor';
    public $timestamps = false;

    protected $fillable = [
        'tanggal_pengajuan', 'kode_pekerja', 'asal', 'tujuan', 'mulai',
        'akhir', 'jumlah_hari', 'keterangan', 'kendaraan', 'status',
        'approval', 'data_upload'
    ];
}
