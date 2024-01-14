<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    protected $table = 'administrator'; // Replace with your actual table name
    protected $primaryKey = 'kode_pekerja'; // Assuming 'kode_pekerja' is the primary key
    public $timestamps = false; // Assuming there's no 'created_at' and 'updated_at' columns

    protected $fillable = [
        'kode_pekerja', 'nama',
    ];
}
