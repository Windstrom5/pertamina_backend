<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pjs extends Model
{
    use HasFactory;

    protected $table = 'pjs';
    protected $primaryKey = 'no';
    public $timestamps = false;

    protected $fillable = [
        'no_pers', 'mulai', 'akhir',
    ];
}
