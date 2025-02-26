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
        Schema::create('find_my_pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi dengan pengguna
            $table->string('name'); // Nama pet
            $table->string('breed'); // Breed pet
            $table->string('last_seen'); // Lokasi terakhir terlihat
            $table->date('date_lost'); // Tanggal kehilangan
            $table->string('color'); // Warna pet
            $table->foreignId('pet_category_id')->constrained('pet_categories')->onDelete('cascade')->onUpdate('cascade'); // Foreign key ke pet_categories
            $table->string('color_tag'); // Tag atau kalung
            $table->string('image'); // Gambar pet
            $table->text('description'); // Deskripsi tentang pet
            $table->timestamps(); // Waktu pembuatan dan pembaruan data
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('find_my_pets'); // Menghapus tabel jika rollback
    }
};
