<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AdoptionPost extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ["user_id","pet_id","name","slug", "age", "location","vaccinated","weight", "status","description","requirement","image_1","image_2","image_3"];
    protected $with = ["user","pet","likedAdoptionPost"];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class,"user_id");
    }

    public function pet(): BelongsTo {
        return $this->belongsTo(Pet::class,"pet_id");
    }

    public function likedAdoptionPost(): HasMany {
        return $this->hasMany(LikedAdoptionPost::class,'adoption_post_id');
    }

    public function scopeFilter(Builder $query, array $filters): void {
        $query->when(
            $filters["category"] ?? false,
            fn($query, $category) =>
            $query->whereHas('pet', fn (Builder $petQuery) => 
                $petQuery->where('pet_category_id', $category)
            )
        );

        $query->when(
            $filters["like"] ?? false,
            fn($query, $like) =>
            $query->whereHas('likedAdoptionPost', fn(Builder $petQuery) => 
                $petQuery->where('user_id',1)
            ) 
        );
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
