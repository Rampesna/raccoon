<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property object role
 *
 * @method static find($primaryKey)
 * @method static where($column, $data)
 * @method static whereIn($column, array $array)
 * @method static whereBetween($column, array $array)
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function id()
    {
        return $this->id;
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function has($permission): bool
    {
        return $this->role->permissions()->where('permission_id', $permission)->exists() ? true : false;
    }

    public function companies(): HasMany
    {
        return $this->hasMany(Company::class);
    }

    public function customers()
    {
        $customers = [];
        foreach ($this->companies as $company) {
            $customers[] = $company->customers;
        }
        return $customers;
    }

    public function topUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'top_id', 'id');
    }

    public function addresses(): MorphTo
    {
        return $this->morphTo(Address::class);
    }
}
