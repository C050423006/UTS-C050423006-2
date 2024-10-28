<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $primaryKey = 'id_petugas';
    public $timestamps = false;

    protected $fillable = [
        'nama_petugas',
        'username',
        'password',
        'jabatan',
        'status'
    ];

    protected $casts = [
        'created_at' => 'datetime'
    ];
}
