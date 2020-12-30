<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static find($primaryKey)
 * @method static where($column, $data)
 * @method static whereIn($column, array $array)
 * @method static whereBetween($column, array $array)
 */
class Collateral extends Model
{
    use HasFactory, SoftDeletes;

    public function company(): MorphToMany
    {
        return $this->morphedByMany(Company::class,'connection');
    }

    public function activities(): MorphTo
    {
        return $this->morphTo(Activity::class);
    }
}
