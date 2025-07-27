<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    protected $fillable = [
        'name',
        'api_unique_number',
    ];

    /**
     * Get all products that have this type.
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'type_assignments')
            ->withPivot('api_unique_number')
            ->withTimestamps();
    }

    /**
     * Get all type assignments for this type.
     */
    public function typeAssignments(): HasMany
    {
        return $this->hasMany(TypeAssignment::class);
    }
}
