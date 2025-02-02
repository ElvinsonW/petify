<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LifeAfterAdoption extends Model
{
    use HasFactory;
    protected $fillable = ["user_id","pet_id","image","description","like_count"];
    protected $with = ['pet'];

    public function scopeFilter(Builder $query, array $filters): void {
        $query->when(
            $filters['category'] ?? false,
            fn($query, $category) =>
                $query->whereHas('pet', fn(Builder $petQuery) =>
                    $petQuery->whereHas('pet_category', fn(Builder $categoryQuery) =>
                        $categoryQuery->where('slug', $category)
                    )
                )
        );      
        
        $query->when(
            $filters['pet'] ?? false,
            fn($query, $pet) => 
                $query->whereHas('pet', fn (Builder $petQuery) => 
                    $petQuery->where('name',$pet)
                )
        );
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class,"user_id");
    }

    public function pet(): BelongsTo {
        return $this->belongsTo(Pet::class,"pet_id");
    }

    public function liked_life_after_adoption(): HasMany {
        return $this->hasMany(LikedLifeAfterAdoption::class,'laa_post_id');
    }
}
