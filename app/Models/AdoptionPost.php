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
    protected $with = ["user","pet","liked_adoption_post"];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class,"user_id");
    }

    public function pet(): BelongsTo {
        return $this->belongsTo(Pet::class,"pet_id");
    }

    public function liked_adoption_post(): HasMany {
        return $this->hasMany(LikedAdoptionPost::class,'adoption_post_id');
    }

    public function adoption_requests(): HasMany {
        return $this->hasMany(AdoptionRequest::class,'post_id');
    }

    public function scopeFilter(Builder $query, array $filters): void {
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) =>
            $query->where(function (Builder $query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('description', 'like', '%' . $search . '%')
                      ->orWhereHas('pet', fn(Builder $petQuery) =>
                        $petQuery->where('breed', 'like', '%' . $search . '%')
                      );
            })
        );        

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
            $filters["like"] ?? false,
            fn($query, $like) =>
            $query->whereHas('liked_adoption_post', fn(Builder $petQuery) => 
                $petQuery->where('user_id',auth()->user()->id)
            ) 
        );

        $query->when(
            $filters["minWeight"] ?? false,
            fn($query, $minWeight) =>
                $query->where('weight', '>=', $minWeight)
        );

        $query->when(
            $filters["maxWeight"] ?? false,
            fn($query, $maxWeight) =>
                $query->where('weight', '<=', $maxWeight)
        );

        $query->when(
            $filters["minAge"] ?? false,
            fn($query, $minAge) =>
                $query->where('age', '>=', $minAge)
        );

        $query->when(
            $filters["maxAge"] ?? false,
            fn($query, $maxAge) =>
                $query->where('age', '<=', $maxAge)
        );

        $query->when(
            $filters["city"] ?? false,
            fn($query, $city) =>
                $query->where('location', 'like', '%' . $city . '%')
        );

        $query->when(
            $filters["gender"] ?? false,
            fn($query, $gender) =>
                $query->whereHas('pet', fn (Builder $petQuery) => 
                    $petQuery->where('gender', $gender)
                )
        );

        $query->when(
            $filters["vaccine"] ?? false,
            fn($query, $vaccine) =>
                $query->where('vaccinated', $vaccine == "yes" ? 1 : 0)
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
