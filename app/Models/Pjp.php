<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pjp extends Model
{
    use HasFactory;

    protected $table = 'master_pjp';
    protected $primaryKey = 'no';
    public $timestamps = false;

    protected $fillable = [
        'nama_pjp', 'no_vendor', 'nama_direktur', 'NPWP', 'alamat', 'no_telp_kantor',
        'fax_kantor', 'email_kantor', 'nama_manager', 'no_telp_manager', 'fax_manager',
        'email_manager', 'logo_pjp',
    ];

}
