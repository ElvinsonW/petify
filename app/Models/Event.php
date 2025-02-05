<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ["event_id", "user_id","title","location","ticket","date", "image", "description"];
    public function schedules()
    {
        return $this->hasMany(Schedule::class,'event_id');
    }
}
