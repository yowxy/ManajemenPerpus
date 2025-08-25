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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_bukus_id')->constrained('kategori_bukus')->cascadeOnDelete();
            $table->string('nama_buku');
            $table->string('judul');
            $table->string('penulis');
            $table->string('penerbit');
            $table->string('tahun_penerbit');
            $table->string('ISBN');
            $table->string('stok_buku');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
