<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Day extends Model
{
    protected $fillable = ["event_id","date"];
    public $timestamps = false;

    public function event(): BelongsTo {
        return $this->belongsTo(Event::class,'event_id');
    }

    public function sessions(): HasMany {
        return $this->hasMany(DaySession::class,'day_id');
    }
}