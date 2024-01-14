<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DelSpkl extends Model
{
    use HasFactory;

    protected $table = 'del_spkl'; // Replace with your actual table name
    protected $primaryKey = 'no_spkl'; // Assuming 'no_spkl' is the primary key
    public $timestamps = false; // Assuming there's no 'created_at' and 'updated_at' columns

    protected $fillable = [
        'alasan', 'status', 'kode_pekerja', 'tanggal', 'posisi', 'mulai', 'akhir', 'pekerjaan',
    ];
}
