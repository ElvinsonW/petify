<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Cviebrock\EloquentSluggable\Sluggable;

class AdoptionPostRequest extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ["user_id","pet_id","pet_category_id","name","slug","gender","breed", "age", "location","vaccinated","weight", "adoption_status","description","requirement","image_1","image_2","image_3","approval_status"];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class,"user_id");
    }

    public function pet_category(): BelongsTo {
        return $this->belongsTo(PetCategory::class,"pet_category_id");
    }

    public function scopeFilter(Builder $query, array $filters){
        $query->when(
            $filters["status"] ?? false,
            fn($query, $status) =>
                $query->where('approval_status',$status)
        );

        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
                $query->where(
                    fn($q) =>
                        $q->where('name', 'like', "%" . $search . "%")
                          ->orWhere('description', 'like', "%" . $search . "%")
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
