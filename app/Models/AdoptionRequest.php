<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdoptionRequest extends Model
{
    use HasFactory;

    // Define which fields can be mass-assigned
    protected $fillable = [
        'user_id',
        'post_id',
        'Q1',
        'Q2',
        'Q3',
        'Q4',
        'Q5',
        'approval_status'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class,"user_id");
    }

    public function adoption_post(): BelongsTo {
        return $this->belongsTo(AdoptionPost::class,"post_id");
    }

    public function scopeFilter(Builder $query, array $filters){
        $query->when(
            $filters["search"] ?? false,
            fn($query, $search) => 
                $query->whereHas('adoption_post', fn($postQuery) => 
                    // dd($postQuery->where('name', 'like', "%" . $search . "%"))
                    $postQuery->where('name', 'like', "%" . $search . "%")
                )->orWhereHas('user', fn($userQuery) => 
                    $userQuery->where('username','like', "%" . $search . "%")
                )
        );
    }
}
