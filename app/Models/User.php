<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'username';
    public $timestamps = false; // Assuming there's no 'created_at' and 'updated_at' columns

    protected $fillable = [
        'username', 'password', 'level_user', 'keaktifan'
    ];
}
