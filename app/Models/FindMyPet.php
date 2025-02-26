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

    // Relasi ke model User (pemilik)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke model PetCategory (kategori hewan)
    public function petCategory()
    {
        return $this->belongsTo(PetCategory::class, 'category_pet', 'slug');
    }

    // Menangani kolom tanggal seperti date_lost
    protected $dates = ['date_lost'];

    // Aksesori untuk mendapatkan URL gambar
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
