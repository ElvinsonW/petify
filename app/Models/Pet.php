<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = ["user_id","pet_category_id","name","breed","gender","image_1","image_2","image_3"];
    public $timestamps = false;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class,'user_id');
    }

    public function pet_category(): BelongsTo {
        return $this->belongsTo(PetCategory::class,'pet_category_id');
    }
}
