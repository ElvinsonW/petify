<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LikedAdoptionPost extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','adoption_post_id'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class,'user_id');
    }

    public function adoptionPost(): BelongsTo {
        return $this->belongsTo(AdoptionPost::class,'adoption_post_id');
    }
}   
