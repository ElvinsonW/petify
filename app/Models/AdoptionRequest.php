<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdoptionRequest extends Model
{
    use HasFactory;

    // Define which fields can be mass-assigned
    protected $fillable = [
        'user_id',
        'Q1',
        'Q2',
        'Q3',
        'Q4',
        'Q5',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class,"user_id");
    }
}
