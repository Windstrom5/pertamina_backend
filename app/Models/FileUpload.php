<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;

    protected $table = 'file_uploads'; // Replace with your actual table name
    protected $primaryKey = 'no'; // Assuming 'no' is the primary key
    public $timestamps = false; // Assuming there's no 'created_at' and 'updated_at' columns

    protected $fillable = [
        'kode_pekerja', 'nomor_sertifikat', 'judul', 'data_upload',
    ];
}
