<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FindMyPet extends Model
{
    use HasFactory;

    // Tentukan kolom yang bisa diisi massal
    protected $fillable = [
        'user_id', // ID pengguna yang mengirimkan data
        'name',     // Nama hewan peliharaan
        'breed',    // Ras hewan
        'last_seen',// Lokasi terakhir terlihat
        'date_lost',// Tanggal kehilangan
        'color',    // Warna hewan
        'category_pet', // Kategori hewan
        'color_tag', // Apakah ada tag atau kalung
        'image',    // Path ke gambar
        'description' // Deskripsi tambahan
    ];
}
