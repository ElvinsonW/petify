<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = ["user_id","event_category_id","title","slug","location","ticket","start_date","end_date", "image", "description","approval_status"];
    
    public function user(): BelongsTo {
        return $this->belongsTo(User::class,'user_id');
    }

    public function event_category(): BelongsTo {
        return $this->belongsTo(ArticleEventCategory::class,'event_category_id');
    }

    public function days(): HasMany
    {
        return $this->hasMany(Day::class,'event_id');
    }

    public function scopeFilter(Builder $query, array $filters){
        $query->when(
            $filters['status'] ?? false,
            fn($query, $status) => 
                $query->where('approval_status',$status)
        );
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
