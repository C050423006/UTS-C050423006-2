<?php

namespace App\Filament\Resources\PengajuanResource\Pages;

use App\Filament\Resources\PengajuanResource;
use App\Models\Riwayat;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditPengajuan extends EditRecord
{
    protected static string $resource = PengajuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        // Buat riwayat pengajuan setelah data diupdate
        $pengajuan = $this->record;

        Riwayat::create([
            'id_pengajuan' => $pengajuan->id,
            'status_pengajuan' => $pengajuan->status_pengajuan,
            'keterangan' => 'Pengajuan diupdate',
            'tanggal_update' => now()
        ]);
    }
}
