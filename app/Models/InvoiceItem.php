<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static find($primaryKey)
 * @method static where($column, $data)
 * @method static whereIn($column, array $array)
 * @method static whereBetween($column, array $array)
 */
class InvoiceItem extends Model
{
    use HasFactory, SoftDeletes;

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(InvoiceItemTransaction::class);
    }
}
