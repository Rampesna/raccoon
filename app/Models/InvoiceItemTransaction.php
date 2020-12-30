<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static find($primaryKey)
 * @method static where($column, $data)
 * @method static whereIn($column, array $array)
 * @method static whereBetween($column, array $array)
 */
class InvoiceItemTransaction extends Model
{
    use HasFactory, SoftDeletes;

    public function item(): BelongsTo
    {
        return $this->belongsTo(InvoiceItem::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(InvoiceItemTransactionType::class);
    }
}
