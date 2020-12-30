<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find($primaryKey)
 * @method static where($column, $data)
 * @method static whereIn($column, array $array)
 * @method static whereBetween($column, array $array)
 */
class State extends Model
{
    use HasFactory;

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
