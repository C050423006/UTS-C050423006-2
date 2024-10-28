<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'layanans';
    protected $primaryKey = 'id_layanan';
    public $timestamps = false;

    protected $fillable = [
        'nama_layanan',
        'deskripsi',
        'persyaratan',
        'estimasi_waktu',
        'biaya',
        'status'
    ];

    protected $casts = [
        'biaya' => 'decimal:2',
        'created_at' => 'datetime'
    ];
}
