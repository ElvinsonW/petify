<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LikedAdoptionPost extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','adoption_post_id'];
    public $incrementing = false;
    protected $primaryKey = ['user_id', 'adoption_post_id'];
    protected $with = ['user'];

    public function getKey()
    {
        return [
            'user_id' => $this->attributes['user_id'],
            'adoption_post_id' => $this->attributes['adoption_post_id'],
        ];
    }
    
    public function user(): BelongsTo {
        return $this->belongsTo(User::class,'user_id');
    }

    public function adoption_post(): BelongsTo {
        return $this->belongsTo(AdoptionPost::class,'adoption_post_id');
    }
}   
