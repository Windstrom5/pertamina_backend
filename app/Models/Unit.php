<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Biodata;

class Unit extends Model
{
    use HasFactory;
    protected $table = 'master_unit';
    protected $primaryKey = 'id_org_unit';
    public $timestamps = false; // Assuming there's no 'created_at' and 'updated_at' columns

    protected $fillable = [
        'nama_unit_org', 'cost_center_pengguna'
    ];
}
