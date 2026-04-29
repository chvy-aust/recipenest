<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'publish_date' => 'datetime',
    ];

    // =============== RELATIONSHIPS ===============

    /**
     * Undocumented function
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get all of the tags for a recipe.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Get all of the comments for a recipe.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }


    // =============== SCOPES ===============


    public function scopeList(Builder $query)
    {
        $query->where('id', '>', 0)
            ->with('user')
            ->with('tags')
            ->where('published', true)
            ->orderBy('created_at', 'desc');
    }

    public function scopeRecipe(Builder $query, string $id)
    {
        $query->where('id', $id);
    }

    public function scopeForUser(Builder $query, int $id)
    {
        $query->where('user_id', $id);
    }



    public function scopeFilter(Builder $query, array $values)
    {
        $query->searchTitle($values['search'] ?? '')
            ->sortDataBy($values['sort'] ?? 'id')
            ->filterByTags($values['tags'] ?? '');
    }

    public function scopeFilterByTags(Builder $query, string $values)
    {
        if (!empty($values)) {
            // split tag string into separate tag strings
            $tagNames = array_map('trim', explode(',', $values));
            // remove empty strings
            $tagNames = array_filter($tagNames);

            if (!empty($tagNames)) {
                // filter recipes based on str tag array
                $query->whereHas('tags', function ($query) use ($tagNames) {
                    $query->whereIn('name', $tagNames);
                    // ensure that ONLY recipes with ALL the input tags are fetched.
                }, "=", count($tagNames));
            }
        }


    }

    public function scopeSearchTitle(Builder $query, $value)
    {
        if (!empty($value)) {
            $query->where('title', 'LIKE', "%$value%");
        }
    }

    public function scopeSortDataBy(Builder $query, $value = 'id')
    {
        if ($value == 'most_comments') {
            $query->sortByComments('desc');
        } elseif ($value == 'least_comments') {
            $query->sortByComments('asc');
        } elseif ($value == 'oldest') {
            $query->reorder('publish_date', 'asc');
        } else {
            $query->reorder('publish_date', 'desc');
        }
    }

    public function scopeSortByComments(Builder $query, $value = 'desc')
    {
        $query->withCount('comments')->orderBy('comments_count', $value);
    }


    // =============== FUNCTIONS ===============


    public function getLink()
    {
        return route('recipes.show', ['id' => $this->id]);
    }



    public function getImage()
    {
        return asset('storage' . $this->image_path . $this->image_name);
    }

}
