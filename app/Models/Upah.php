<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upah extends Model
{
    use HasFactory;

    protected $table = 'master_upah';
    protected $primaryKey = 'kode_upah';
    public $timestamps = false;

    protected $fillable = [
        'nama_upah', 'klasifikasi', 'kota', 'lokasi', 'kenaikan', 'insentif_dot', 'upah',
    ];
}
