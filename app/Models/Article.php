<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ["title","slug","user_id","article_category_id","content","image"];
    protected $with = ["user","articleCategory"];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class,"user_id");
    }

    public function articleCategory(): BelongsTo {
        return $this->belongsTo(ArticleCategory::class,"article_category_id");
    }

    public function scopeFilter(Builder $query, array $filter): void {
        $query->when(
            $filter['category'] ?? false,
            fn ($query, $category) =>
            $query->whereHas(
                'articleCategory',
                fn($query) => 
                $query->where('slug',$category)
            )
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
