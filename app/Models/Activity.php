<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static find($primaryKey)
 * @method static where($column, $data)
 * @method static whereIn($column, array $array)
 * @method static whereBetween($column, array $array)
 */
class Activity extends Model
{
    use HasFactory, SoftDeletes;

    public function activityable(): MorphTo
    {
        return $this->morphTo();
    }
}
