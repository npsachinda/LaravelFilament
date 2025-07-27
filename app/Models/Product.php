<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'color_id',
    ];

    /**
     * Get the category that owns this product.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the color that owns this product.
     */
    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }

    /**
     * Get all types for this product.
     */
    public function types(): BelongsToMany
    {
        return $this->belongsToMany(Type::class, 'type_assignments')
            ->withPivot('api_unique_number')
            ->withTimestamps();
    }

    /**
     * Get all type assignments for this product.
     */
    public function typeAssignments(): HasMany
    {
        return $this->hasMany(TypeAssignment::class);
    }
}
