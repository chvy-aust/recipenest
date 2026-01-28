<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    use HasFactory;
    protected $guarded = [];

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




    // =============== SCOPES ===============


    public function scopeList(Builder $query)
    {
        $query->where('id', '>', 0)
            ->with('user')
            ->where('public', true)
            ->orderBy('publish_date', 'desc');
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
            ->sortDataBy($values['sort'] ?? 'id');
    }

    public function scopeSearchTitle(Builder $query, $value)
    {
        if (!empty($value)) {
            $query->where('title', 'LIKE', "%$value%");
        }
    }

    public function scopeSortDataBy(Builder $query, $value = 'id')
    {
        if ($value == 'oldest') {
            $query->reorder('publish_date');
        } else {
            $query->reorder('publish_date', 'desc');
        }
    }


    // =============== FUNCTIONS ===============


    /**
     * Undocumented function
     *
     * @return void
     */
    public function getLink()
    {
        return route('recipes.show', ['id' => $this->id]);
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
