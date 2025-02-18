<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdoptionRequest extends Model
{
    use HasFactory;

    // Add all the fields you want to be fillable
    protected $fillable = [
        'user_id', 
        'description', 
        'travel_plan', 
        'experience', 
        'yard_space', 
        'adoption_reason'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class,"user_id");
    }
}
