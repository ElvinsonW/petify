<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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
        'pet_category_id', // Kategori hewan
        'color_tag', // Apakah ada tag atau kalung
        'image',    // Path ke gambar
        'description', // Deskripsi tambahan
        'city',
        'gender'
    ];

    // Relasi ke model User (pemilik)
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    // Relasi ke model PetCategory (kategori hewan)
    public function pet_category()
    {
        return $this->belongsTo(PetCategory::class, 'pet_category_id');
    }


    // Menangani kolom tanggal seperti date_lost
    protected $dates = ['date_lost'];

    // Aksesori untuk mendapatkan URL gambar
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function scopeFilter(Builder $query, array $filters){
        $query->when(
            $filters["search"] ?? false, 
            fn($query, $search) =>
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('breed', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%')
        );

        $query->when(
            $filters['category'] ?? false,
            fn($query, $category) =>
                $query->whereHas('pet_category', fn($categoryQuery) =>
                    $categoryQuery->where('slug', $category)
                )
        );

        $query->when(
            $filters['collar_tag'] ?? false,
            fn($query, $collarTag) => 
                $collarTag !== 'Any' ? $query->where('color_tag', $collarTag) : $query
        );

        // Filter berdasarkan city
        $query->when(
            $filters['city'] ?? false,
            fn($query, $city) => 
                $query->where('city', 'like', '%' . $city . '%')
        );

    }


}


