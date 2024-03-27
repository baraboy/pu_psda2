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
        Schema::create('pos', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('jenis_pos', ['Duga Air', 'Klimatologi', 'Curah Hujan']);
            $table->string('foto')->nullable();
            $table->string('utm_x')->nullable();
            $table->string('utm_y')->nullable();
            $table->string('koordinat_ls')->nullable();
            $table->string('koordinat_bt')->nullable();
            $table->string('das')->nullable();
            $table->string('no_registrasi')->nullable();
            $table->string('desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pos');
    }
};
