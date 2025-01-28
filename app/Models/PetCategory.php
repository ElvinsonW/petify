<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PetCategory extends Model
{
    use HasFactory;

    protected $fillable = ["name","slug"];
    public $timestamps = false;

    public function pets(): HasMany {
        return $this->hasMany(Pet::class,'pet_category_id');
    }
}
