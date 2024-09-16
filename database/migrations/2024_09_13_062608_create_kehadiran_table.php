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
        Schema::create('kehadiran', function (Blueprint $table) {
            $table->id('kehadiran_id');
            $table->foreignId('karyawan_id');
            $table->dateTime('tgl_kehadiran');
            $table->timestamp('waktu_masuk');
            $table->timestamp('waktu_keluar');
            $table->enum('status', ['Hadir', 'Absen', 'Telat']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kehadiran');
    }
};
