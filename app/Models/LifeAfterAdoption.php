<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LifeAfterAdoption extends Model
{
    use HasFactory;
    protected $fillable = ["user_id","pet_id","image","description"];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class,"user_id");
    }

    public function pet(): BelongsTo {
        return $this->belongsTo(Pet::class,"pet_id");
    }
}
