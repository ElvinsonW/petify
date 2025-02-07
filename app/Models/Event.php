<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = ["user_id","title","slug","location","ticket","start_date","end_date", "image", "description"];
    
    public function days()
    {
        return $this->hasMany(Day::class,'event_id');
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
