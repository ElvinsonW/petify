<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArticleRequest extends Model
{
    use HasFactory;

    protected $fillable = ["title","slug","user_id","article_category_id","content","image","approval_status"];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class,"user_id");
    }

    public function article_category(): BelongsTo {
        return $this->belongsTo(ArticleEventCategory::class,"article_category_id");
    }

    public function scopeFilter(Builder $query, array $filters){
        $query->when(
            $filters["status"] ?? false,
            fn($query, $status) =>
                $query->where('approval_status',$status)
        );
        
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) => 
                $query->where(
                    fn($q) =>
                        $q->where('title', 'like', '%'. $search . '%')
                          ->orWhere('content', 'like', '%' . $search . '%')
                )
        );
    }
}
