<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $table = 'manager';
    protected $primaryKey = 'no_pers';
    public $timestamps = false;

    protected $fillable = [
        'id_org_unit', 'kbo', 'nama_unit_org', 'id_posisi', 'posisi', 'no_pers', 'nama', 'id_job', 'email',
    ];
}
