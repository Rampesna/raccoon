<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static find($primaryKey)
 * @method static where($column, $data)
 * @method static whereIn($column, array $array)
 * @method static whereBetween($column, array $array)
 */
class Unit extends Model
{
    use HasFactory, SoftDeletes;

    public function company(): MorphToMany
    {
        return $this->morphedByMany(Company::class,'connection');
    }

    public function stocks(): HasMany
    {
        return $this->hasMany(Stock::class);
    }
}
