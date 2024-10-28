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
        Schema::create('dokumens', function (Blueprint $table) {
            $table->id('id_dokumen');
            $table->foreignId('id_pengajuan');
            $table->string('nama_dokumen', 100);
            $table->string('file_path', 255);
            $table->timestamp('tanggal_upload')->useCurrent();
            $table->foreign('id_pengajuan')->references('id_pengajuan')->on('pengajuans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumens');
    }
};
