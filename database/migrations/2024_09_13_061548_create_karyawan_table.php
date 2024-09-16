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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id('karyawan_id')->primary();
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('telepon');
            $table->dateTime('tgl_masuk');
            $table->string('nama_pekerjaan');
            $table->foreignId('department_id');
            $table->foreignId('manager_id');
            $table->decimal('nominal_gaji', total: 10, places: 2);
            $table->enum('status', ['Aktif', 'Tidak Aktif', 'Diberhentikan']);
            $table->string('foto')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
