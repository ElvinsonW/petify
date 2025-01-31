<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LikedLifeAfterAdoption extends Model
{
    protected $fillable = ['user_id','laa_post_id'];
    public $incrementing = false;
    protected $primaryKey = ['user_id', 'laa_post_id'];

    public function getKey()
    {
        return [
            'user_id' => $this->attributes['user_id'],
            'laa_post_id' => $this->attributes['laa_post_id'],
        ];
    }
    
    public function user(): BelongsTo {
        return $this->belongsTo(User::class,'user_id');
    }

    public function life_after_adoption(): BelongsTo {
        return $this->belongsTo(LifeAfterAdoption::class,'laa_post_id');
    }
}
