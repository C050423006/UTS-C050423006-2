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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id('id_pengajuan');
            $table->string('nik', 16);
            $table->foreignId('id_layanan');
            $table->timestamp('tanggal_pengajuan')->useCurrent();
            $table->enum('status_pengajuan', ['pending', 'proses', 'selesai', 'ditolak']);
            $table->text('keterangan')->nullable();
            $table->foreign('nik')->references('nik')->on('pendududuks');
            $table->foreign('id_layanan')->references('id_layanan')->on('layanans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
