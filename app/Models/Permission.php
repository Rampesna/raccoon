<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($primaryKey)
 * @method static where($column, $data)
 * @method static whereIn($column, array $array)
 * @method static whereBetween($column, array $array)
 */
class Permission extends Model
{
    use HasFactory;
}
