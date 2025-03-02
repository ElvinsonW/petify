<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'address',
        'phone_number',
        'point',
        'image'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function articles(): HasMany {
        return $this->hasMany(Article::class,'user_id');
    }

    public function adoption_posts(): HasMany {
        return $this->hasMany(AdoptionPost::class,'user_id');
    }

    public function liked_adoption_post(): HasMany {
        return $this->hasMany(LikedAdoptionPost::class,'user_id');
    }

    public function liked_life_after_adoption(): HasMany {
        return $this->hasMany(LikedLifeAfterAdoption::class,'user_id');
    }

    public function life_after_adoption(): HasMany{
        return $this->hasMany(LifeAfterAdoption::class,"user_id");
    }

    public function article_requests(): HasMany {
        return $this->hasMany(ArticleRequest::class,"user_id");
    }

    public function adoption_post_requests(): HasMany {
        return $this->hasMany(AdoptionPostRequest::class,"user_id");
    }

    public function events(): HasMany {
        return $this->hasMany(Event::class,'user_id');
    }

    public function adoption_requests(): HasMany {
        return $this->hasMany(AdoptionRequest::class,"user_id");
    }

    public function addPoint(int $point){
        $this->update([
            "point" => $this->point + $point
        ]);
    }
}
