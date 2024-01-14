<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    use HasFactory;

    protected $table = 'reviewer';
    protected $primaryKey = 'no_pers';
    public $timestamps = false; // Assuming there's no 'created_at' and 'updated_at' columns

    protected $fillable = [
        'username', 'password', 'level_user', 'keaktifan'
    ];
}
