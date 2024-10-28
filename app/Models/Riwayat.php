<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    protected $table = 'riwayats';
    protected $primaryKey = 'id_riwayat';
    public $timestamps = false;

    protected $fillable = [
        'id_pengajuan',
        'id_petugas',
        'status_pengajuan', 
        'keterangan',
        'tanggal_update'
    ];

    protected $casts = [
        'tanggal_update' => 'datetime'
    ];

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class, 'id_pengajuan');
    }

    public function petugas() 
    {
        return $this->belongsTo(Petugas::class, 'id_petugas');
    }
}
