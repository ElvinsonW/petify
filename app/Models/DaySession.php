<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DaySession extends Model
{
    use HasFactory;
    
    protected $fillable = ["day_id","time","title","description"];
    public $timestamps = false;

    public function day(): BelongsTo{
        return $this->belongsTo(Day::class,'day_id');
    }
}