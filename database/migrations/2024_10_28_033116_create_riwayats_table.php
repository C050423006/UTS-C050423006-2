<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('riwayats', function (Blueprint $table) {
            $table->id('id_riwayat');
            $table->foreignId('id_pengajuan');
            $table->foreignId('id_petugas'); 
            $table->enum('status_pengajuan', ['pending', 'proses', 'selesai', 'ditolak']);
            $table->text('keterangan')->nullable();
            $table->timestamp('tanggal_update')->useCurrent();
            $table->foreign('id_pengajuan')->references('id_pengajuan')->on('pengajuans');
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayats');
    }
};
