<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TypeAssignment extends Model
{
    protected $fillable = [
        'type_id',
        'product_id',
        'api_unique_number',
    ];

    /**
     * Get the product that owns this type assignment.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the type associated with this assignment.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}
