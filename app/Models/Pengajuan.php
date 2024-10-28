<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'pengajuans';
    protected $primaryKey = 'id_pengajuan';
    public $timestamps = false;

    protected $fillable = [
        'nik',
        'id_layanan',
        'tanggal_pengajuan',
        'status_pengajuan',
        'keterangan'
    ];

    protected $casts = [
        'tanggal_pengajuan' => 'datetime'
    ];

    public function penduduk()
    {
        return $this->belongsTo(Pendududuk::class, 'nik', 'nik');
    }

    public function layanan() 
    {
        return $this->belongsTo(Layanan::class, 'id_layanan');
    }

    public function dokumen()
    {
        return $this->hasMany(Dokumen::class, 'id_pengajuan');
    }

    public function riwayat()
    {
        return $this->hasMany(Riwayat::class, 'id_pengajuan'); 
    }
}
