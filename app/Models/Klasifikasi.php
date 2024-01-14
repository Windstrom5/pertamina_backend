<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasifikasi extends Model
{
    use HasFactory;

    protected $table = 'master_klasifikasi';
    protected $primaryKey = 'no';
    public $timestamps = false;

    protected $fillable = [
        'klasifikasi_name', 'klasifikasi', 'jenis_pekerjaan', 'jam_kerja',
    ];
}
