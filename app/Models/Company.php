<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static find($primaryKey)
 * @method static where($column, $data)
 * @method static whereIn($column, array $array)
 * @method static whereBetween($column, array $array)
 */
class Company extends Model
{
    use HasFactory, SoftDeletes;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function subCompanies(): HasMany
    {
        return $this->hasMany(Company::class, 'top_id', 'id');
    }

    public function topCompany(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'top_id', 'id');
    }

    public function customerCategories(): MorphToMany
    {
        return $this->morphedByMany(Category::class, 'connection')->where('type', 'customer');
    }

    public function invoiceCategories(): MorphToMany
    {
        return $this->morphedByMany(Category::class, 'connection')->where('type', 'invoice');
    }

    public function banks(): MorphToMany
    {
        return $this->morphToMany(Bank::class, 'connection');
    }

    public function safes(): MorphToMany
    {
        return $this->morphToMany(Safe::class, 'connection');
    }

    public function collaterals(): MorphToMany
    {
        return $this->morphToMany(Collateral::class, 'connection');
    }

    public function invoices(): MorphToMany
    {
        return $this->morphToMany(Invoice::class, 'connection');
    }

    public function stocks(): MorphToMany
    {
        return $this->morphToMany(Stock::class, 'connection');
    }

    public function customers(): MorphToMany
    {
        return $this->morphedByMany(Customer::class, 'connection');
    }

    public function units(): MorphToMany
    {
        return $this->morphToMany(Unit::class, 'connection');
    }

    public function serialNumbers(): MorphToMany
    {
        return $this->morphToMany(SerialNumber::class, 'connection');
    }

    public function addresses(): MorphTo
    {
        return $this->morphTo(Address::class);
    }
}
