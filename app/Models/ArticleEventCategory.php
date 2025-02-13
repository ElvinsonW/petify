<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ArticleEventCategory extends Model
{
    use HasFactory;

    protected $fillable = ["name","slug"];
    public $timestamps = false;

    public function articles(): HasMany {
        return $this->hasMany(Article::class,'article_category_id');
    }

    public function article_requests(): HasMany {
        return $this->hasMany(ArticleRequest::class,'article_category_id');
    }

    public function events(): HasMany {
        return $this->hasMany(Event::class,'event_category_id');
    }
}
