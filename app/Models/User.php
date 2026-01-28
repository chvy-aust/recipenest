<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        'email',
        'password',
        'short_description',
        'full_description',
        'image_path',
        'image_name',
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

        // =============== RELATIONSHIPS ===============
    /**
     * Get all of the recipes for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipes(): HasMany
    {
        return $this->hasMany(Recipe::class);
    }


    // =============== SCOPES ===============

    public function scopeList(Builder $query)
    {
        $query->where('id', '>', 0)
            ->withCount(['recipes as total_recipes'])
        ;
    }

    public function scopeAuthor(Builder $query, $id)
    {
        $query->where('id', $id);
    }



    // =============== FUNCTIONS ===============

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getLink()
    {
        return route('chefs.show', ['id' => $this->id]);
    }


    /**
     * Undocumented function
     *
     * @return void
     */
    public function getPortfolioLink()
    {
        return route('chefs.portfolio.show', ['id' => $this->id]);
    }


    /**
     * Undocumented function
     *
     * @return void
     */
    public function getImage()
    {
        return asset('storage' . $this->image_path . $this->image_name);
    }
}
