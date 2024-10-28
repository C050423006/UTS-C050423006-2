<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendududuk extends Model
{
    protected $table = 'pendududuks';
    protected $primaryKey = 'id_penduduk';

    protected $fillable = [
        'nik',
        'nama', 
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'rt',
        'rw', 
        'kelurahan',
        'kecamatan',
        'agama',
        'status_perkawinan',
        'pekerjaan',
        'kewarganegaraan',
        'foto',
        'status'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];
}
