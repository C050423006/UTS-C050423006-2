<?php

namespace App\Filament\Resources\PengajuanResource\Pages;

use App\Filament\Resources\PengajuanResource;
use App\Models\Riwayat;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreatePengajuan extends CreateRecord
{
    protected static string $resource = PengajuanResource::class;

    protected function afterCreate(): void
    {
        // Buat riwayat pengajuan setelah data pengajuan dibuat
        $pengajuan = $this->record;

        Riwayat::create([
            'id_pengajuan' => $pengajuan->id,
            'status_pengajuan' => 'Pending',
            'keterangan' => 'Pengajuan baru dibuat',
            'tanggal_update' => now()
        ]);
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
